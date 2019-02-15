<?php

function wp_ajax_crp_get_portfolio(){
    global $wpdb;
    $response = new stdClass();

    if(!isset($_GET['id'])){
        $response->status = 'error';
        $response->errormsg = 'Invalid portfolio identifier!';
        crp_ajax_return($response);
    }

    $pid = $_GET['id'];
    $query = $wpdb->prepare("SELECT * FROM ".CRP_TABLE_PORTFOLIOS." WHERE id = %d", $pid);
    $res = $wpdb->get_results( $query , OBJECT );

    if(count($res)){
        $portfolio = $res[0];

        $query = $wpdb->prepare("SELECT * FROM ".CRP_TABLE_PROJECTS." WHERE pid = %d", $pid);
        $res = $wpdb->get_results( $query , OBJECT );

        $projects = array();
        foreach($res as $project) {
            if (!empty($project->categories)) {
                $project->categories = explode(',', $project->categories);
            } else {
                $project->categories = array();
            }

            if(!empty($project->details)) {
                $project->details = json_decode($project->details, true);
            }

            $projects[$project->id] = $project;

            $picJson = json_decode(base64_decode($project->cover));
            $picId = $picJson ? $picJson->id : '';
            $picInfo = $picId ? CRPHelper::getAttachementMeta($picId, "medium") : '';
            $pic = array(
                "id" => $picId,
                "src" => $picInfo ? $picInfo["src"] : '',
            );
            $project->cover = base64_encode(json_encode($pic));

            $pics = array();
            if ($project->pics && !empty($project->pics)) {
                $exp = explode(",", $project->pics);
                foreach ($exp as $item) {
                    $picJson = json_decode(base64_decode($item));
                    $picId = $picJson ? $picJson->id : '';
                    $picInfo = $picId ? CRPHelper::getAttachementMeta($picId, "medium") : '';
                    $pic = array(
                        "id" => $picId,
                        "src" => $picInfo ? $picInfo["src"] : '',
                    );

                    $pics[] = base64_encode(json_encode($pic));
                }
            }
            $project->pics = implode(",", $pics);
        }

        $portfolio->projects = $projects;
        $portfolio->corder = explode(',',$portfolio->corder);
        $portfolio->options = json_decode( str_replace('\"', '"', $portfolio->options), true);

        $response->status = 'success';
        $response->portfolio = $portfolio;
    }else{
        $response->status = 'error';
        $response->errormsg = 'Unknown portfolio identifier!';
    }

    crp_ajax_return($response);
}

function wp_ajax_crp_save_portfolio() {
    global $wpdb;
    $response = new stdClass();

    if(!isset($_POST['portfolio'])){
        $response->status = 'error';
        $response->errormsg = 'Invalid portfolio passed!';
        crp_ajax_return($response);
    }

    //Convert to stdClass object
    $portfolio = json_decode( stripslashes( $_POST['portfolio']), true);
    $pid = isset($portfolio['id']) ? $portfolio['id'] : 0;
    $corder = isset($portfolio['corder']) ? implode(',',$portfolio['corder']) : "";
    $extOptions = array(
        'type' => ((isset($portfolio['extoptions']) && isset($portfolio['extoptions']['type'])) ? $portfolio['extoptions']['type'] : CRPGridType::ALBUM)
    );

    //Insert if portfolio is draft yet
    if(isset($portfolio['isDraft']) && $portfolio['isDraft']){
        $title = isset($portfolio['title']) ? $portfolio['title'] : "";

        //@TODO move this logic to update hook in future
        if ($extOptions['type'] == CRPGridType::CATALOG) {
            $dbInitializer = new DBInitializer();
            $dbInitializer->checkForChanges();
        }

        $wpdb->insert(
            CRP_TABLE_PORTFOLIOS,
            array(
                'title' => $title,
            ),
            array(
                '%s',
            )
        );

        //Get real identifier and use it instead of draft identifier for tmp usage
        $pid = $wpdb->insert_id;
    }

    $projects = isset($portfolio['projects']) ? $portfolio['projects'] : array();
    foreach($projects as $id => $project){

        $title = isset($project['title']) ? $project['title'] : "";
        $cover = isset($project['cover']) ? $project['cover'] : "";
        $description = isset($project['description']) ? $project['description'] : "";
        $url = isset($project['url']) ? $project['url'] : "";
        $pics = isset($project['pics']) ? $project['pics'] : "";
        $cats = isset($project['categories']) ? implode(',',$project['categories']) : "";
        $details = isset($project['details']) ? $project['details'] : '';

        if(isset($project['isDraft']) && $project['isDraft']){
            $wpdb->insert(
                CRP_TABLE_PROJECTS,
                array(
                    'title' => $title,
                    'pid' => $pid,
                    'cover' => $cover,
                    'description' => $description,
                    'url' => $url,
                    'pics' => $pics,
                    'categories' => $cats,
                    'details' => json_encode($details)
                ),
                array(
                    '%s',
                    '%d',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                )
            );

            $realProjId = $wpdb->insert_id;
            $corder = str_replace($id,$realProjId,$corder);
        }else{
            $wpdb->update(
                CRP_TABLE_PROJECTS,
                array(
                    'title' => $title,
                    'cover' => $cover,
                    'description' => $description,
                    'url' => $url,
                    'pics' => $pics,
                    'categories' => $cats,
                    'details' => json_encode($details)
                ),
                array( 'id' => $id ),
                array(
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                ),
                array( '%d' )
            );
        }
    }

    $deletions = isset($portfolio['deletions']) ? $portfolio['deletions'] : array();
    foreach($deletions as $deletedProjectId) {
        // Default usage.
        $wpdb->delete( CRP_TABLE_PROJECTS, array( 'id' => $deletedProjectId ) );
    }

    $title = isset($portfolio['title']) ? $portfolio['title'] : "";
    $extOptions = json_encode($extOptions);
    $wpdb->update(
        CRP_TABLE_PORTFOLIOS,
        array(
            'title' => $title,
            'corder' => $corder,
            'extoptions' => $extOptions
        ),
        array( 'id' => $pid ),
        array(
            '%s',
            '%s',
            '%s'
        ),
        array( '%d' )
    );

    $response->status = 'success';
    $response->pid = $pid;
    crp_ajax_return($response);
}

function wp_ajax_crp_save_log_status() {
    $response = new stdClass();
    if (isset($_POST['status'])){
        $status = ($_POST['status'] == 'on' ? 'on' : 'off');
        update_option(CRP_LOG_STATUS_OPTION_KEY, $status);
        $response->status = 'success';
    }

    crp_ajax_return($response);
}

//Helper functions
function crp_ajax_return( $response ){
    echo  json_encode( $response );
    die();
}
