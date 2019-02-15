<?php
class wpda_contdown_extend_timer_page{
	
	private $options;
	
	function __construct(){		
		$this->options=self::return_params_array();					
	}
	
	public static function return_params_array(){	
		return array(
			"timer_set_time"=>array(
				"heading_name"=>"Set Time",
				"params"=>array(
					"timer_coundown_type"=>array(
						"title"=>"Timer type",
						"description"=>"Choose the timer type. Countdown is an simple countdown timer. Count up timer will start counting up after selected start date. Personal coundown timer counting for every user and ends after countdown time expired. Personal count up timer working the same way as Personal coundown timer.",				
						"function_name"=>"simple_select",
						"values"=>array("countdown"=>"Countdown timer","countup"=>"Count up timer","session_countdown"=>"Personal coundown timer","session_countup"=>"Personal count up timer"),
						"default_value"=>"countdown",
						"pro"=>true,
					),	
					"timer_end_date"=>array(
						"title"=>"End Date",
						"description"=>"Set Timer expire date",				
						"function_name"=>"calendar_input",
						"small_text"=>"(Date)",
						"default_value"=>date('d/m/Y', (time()+(24 * 60 * 60)))." 00:00",
					),
					"timer_timezone"=>array(
						"title"=>"Time Zone",
						"description"=>"Select the timer Time Zone",
						"values"=>self::timezone_array(),
						"function_name"=>"simple_select",
						"default_value"=>((date_default_timezone_get()=="UTC")?"Europe/London":date_default_timezone_get()),
					),
				)
			),
			"after_timer"=>array(
				"heading_name"=>"After timer expires",
				"params"=>array(					
					"after_countdown_end_type"=>array(
						"title"=>"Action after timer expires",
						"description"=>"Select the action you need afer the countdown expires",				
						"function_name"=>"simple_select",
						"values"=>array("hide"=>"Hide Countdown","text"=>"Show Text","repeat"=>"Repeat (Pro feature)","redirect"=>"Redirect (Pro feature)"),
						"default_value"=>"hide",
					),
					"after_countdown_text"=>array(
						"title"=>"Text",
						"description"=>"Type text",				
						"function_name"=>"tinmce",
						"default_value"=>"After Countdown text",
					)
				),
			),
			"before_timer"=>array(
				"heading_name"=>"Before Count up start<span class='pro_feature'>(Pro)</span>",
				"params"=>array(					
					"before_countup_start_type"=>array(
						"title"=>"Action before Count up start",
						"description"=>"Select the action you need before Count up start.",				
						"function_name"=>"simple_select",
						"values"=>array("none"=>"None","text"=>"Show Text"),
						"default_value"=>"none",
						"pro"=>true,
						
					),
					"before_countup_text"=>array(
						"title"=>"Countup text",
						"description"=>"Type text",				
						"function_name"=>"tinmce",
						"default_value"=>"Before countdown text",
						"pro"=>true,
					),		
				),
			),	
		);
	}
	public static function get_default_values_array(){
		$array_of_returned=array();
		$options=self::return_params_array();
		foreach($options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				$array_of_returned[$key]=$value['default_value'];
			}
		}	
		return $array_of_returned;
	}
	public function controller_page(){
		global $wpdb;
		$task="default";
		$id=0;
		if(isset($_GET["task"])){
			$task=$_GET["task"];
		}
		if(isset($_GET["id"])){
			$id=$_GET["id"];
		}		
		switch($task){
		case 'add_wpda_contdown_extend_timer':	
			$this->add_edit_timer($id);
			break;
			
		case 'add_edit_timer':	
			$this->add_edit_timer($id);
			break;
		
		case 'save_timer':		
			if($id)	
				$this->update_timer($id);
			else
				$this->save_timer();
				
			$this->display_table_list_timer();	
			break;
			
			
		case 'update_timer':		
			if($id){
				$this->update_timer($id);
			}else{
				$this->save_timer();
				$_GET['id']=$wpdb->get_var("SELECT MAX(id) FROM ".wpda_contdown_extend_databese::$table_names['timer']);
				$id=$_GET['id'];
			}
			$this->add_edit_timer($id);
			break;
		case 'set_default_timer':
			$this->set_default_timer($id);
			$this->display_table_list_timer();	
		break;
		case 'remove_timer':	
			$this->remove_timer($id);
			$this->display_table_list_timer();
			break;				
		default:
			$this->display_table_list_timer();
		}
	}
	
/*############  Save function  ################*/
	
	private function save_timer(){
		global $wpdb;
		if(count($_POST)==0)
			return;		
		$params_array=array();
		if(isset($_POST['name'])){
			$name=sanitize_text_field($_POST['name']);
		}else{
			$name="Timer";
		}
		
		$params_array=array('name'=>sanitize_text_field($name),"start_time"=>mktime ((int)date("H"),(int)date("i"),(int)date("s") ,(int)date("n"), (int)date("j"),(int)date("Y")));
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				if(isset($_POST[$key])){
					if(is_array($_POST[$key])){
						$params_array[$key]=$_POST[$key];
					}else{
						$params_array[$key]=stripslashes($_POST[$key]);
					}
				}else{
					$params_array[$key]=$value['default_value'];
				}
			}
		}
		
		$save_or_no=$wpdb->insert( wpda_contdown_extend_databese::$table_names['timer'], 
			array( 
				'name' => $name==''?'Unnamed':$name,
				'option_value' => json_encode($params_array),
				
			), 
			array( 
				'%s', 
				'%s',
			) 
		);
		if($save_or_no){
			?><div class="updated"><p><strong>Item Saved</strong></p></div><?php
		}
		else{
			?><div id="message" class="error"><p>Error please reinstall plugin</p></div> <?php
		}
	}
	
/*############  Update timer ID function  ################*/
	
	private function update_timer($id){
		global $wpdb;
		if(count($_POST)==0)
			return;
		$params_array=array();
		if(isset($_POST['name'])){
			$name=(sanitize_text_field($_POST['name'])=="" || sanitize_text_field($_POST['name'])=="0")?"Unnamed":sanitize_text_field($_POST['name']);
		}else{
			$name="Timer";
		}
		$params_array=array('name'=>sanitize_text_field($name),"start_time"=>mktime ((int)date("H"),(int)date("i"),(int)date("s") ,(int)date("n"), (int)date("j"),(int)date("Y")));
		foreach($this->options as $param_heading_key=>$param_heading_value){
			foreach($param_heading_value['params'] as $key=>$value){
				if(isset($_POST[$key])){
					if(is_array($_POST[$key])){
						$params_array[$key]=$_POST[$key];
					}else{
						$params_array[$key]=stripslashes($_POST[$key]);
					}
				}else{
					$params_array[$key]=$value['default_value'];
				}
			}
		}		
		$wpdb->update( wpda_contdown_extend_databese::$table_names['timer'], 
			array( 
				'name' => $name,
				'option_value' => json_encode($params_array),
			), 
			array( 
				'id'=>$id 
			),
			array( 
				'%s', 
				'%s'
			),
			array( 
				'%d'
			)  
		);
		
		?><div class="updated"><p><strong>Item Saved</strong></p></div><?php
		
	}
	
	
	private function remove_timer($id){
		global $wpdb;
		$wpdb->query($wpdb->prepare('DELETE FROM ' . wpda_contdown_extend_databese::$table_names['timer'].' WHERE id="%d"', $id));
	}
	
	private function display_table_list_timer(){
		
		?>
        <style>
        .description_row:nth-child(odd){
			background-color: #f9f9f9;
		}
		
        </style>
        <script> var my_table_list=<?php echo $this->generete_jsone_list(); ?></script>
        <div class="wrap">
            <form method="post"  action="" id="admin_form" name="admin_form" ng-app="" ng-controller="customersController">
			<h2 style="width: 95%">Timer <a href="admin.php?page=wpda_contdown_extend_menu&task=add_wpda_contdown_extend_timer" class="add-new-h2">Add New</a><a target="_blank" class="upgrate_pro_link" href="http://wpdevart.com/wordpress-countdown-extended-version/"><span class="pro_feature"> (Upgrade to Pro Version)</span></a> <a target="blank" href="<?php echo wpdevart_countdown_extended_support_url; ?>" class="wp_support">Support</a></h2>            
   
            <div class="tablenav top" style="width:95%">  
                <input type="text" placeholder="Search" ng-change="filtering_table();" ng-model="searchText">            
                <div class="tablenav-pages"><span class="displaying-num">{{filtering_table().length}} items</span>
                <span ng-show="(numberOfPages()-1)>=1">
                    <span class="pagination-links"><a class="first-page" ng-class="{disabled:(curPage < 1 )}" title="Go to the first page" ng-click="curPage=0">«</a>
                    <a class="prev-page" title="Go to the previous page" ng-class="{disabled:(curPage < 1 )}" ng-click="curPage=curPage-1; curect()">‹</a>
                    <span class="paging-input"><span class="total-pages">{{curPage + 1}}</span> of <span class="total-pages">{{ numberOfPages() }}</span></span>
                    <a class="next-page" title="Go to the next page" ng-class="{disabled:(curPage >= (numberOfPages() - 1))}" ng-click=" curPage=curPage+1; curect()">›</a>
                    <a class="last-page" title="Go to the last page" ng-class="{disabled:(curPage >= (numberOfPages() - 1))}" ng-click="curPage=numberOfPages()-1">»</a></span></div>
                </span>
            </div>
            <table class="wp-list-table widefat fixed pages" style="width:95%">
                <thead>
                    <tr>
                        <th style="width: 100px;" id='oreder_by_id' data-ng-click="order_by='id'; reverse=!reverse; ordering($event,order_by,reverse);" class="manage-column sortable desc" scope="col"><a><span>ID</span><span class="sorting-indicator"></span></a></th>
                        <th data-ng-click="order_by='name'; reverse=!reverse; ordering($event,order_by,reverse)" class="manage-column sortable desc"><a><span>Name</span><span class="sorting-indicator"></span></a></th>
                        <th style="width:80px">Edit</th>
                        <th  style="width:80px">Delete</th>
                    </tr>
                </thead>
                <tbody>
                 <tr ng-repeat="rows in names | filter:filtering_table" class="description_row">
					 <td>{{rows.id}}</td>
					 <td><a href="admin.php?page=wpda_contdown_extend_menu&task=add_edit_timer&id={{rows.id}}">{{rows.name}}</a></td>
					 <td><a href="admin.php?page=wpda_contdown_extend_menu&task=add_edit_timer&id={{rows.id}}">Edit</a></td>
					 <td><a href="admin.php?page=wpda_contdown_extend_menu&task=remove_timer&id={{rows.id}}">Delete</a></td>                               
                  </tr> 
                </tbody>
            </table>
        </form>
        </div>
    <script>

jQuery(document).ready(function(e) {
    jQuery('a.disabled').click(function(){return false});
	jQuery('form').on("keyup keypress", function(e) {
		var code = e.keyCode || e.which; 
		if (code  == 13) {               
			e.preventDefault();
			return false;
		}
	});
});
    function customersController($scope,$filter) {
		var orderBy = $filter('orderBy');
		$scope.previsu_search_result='';
		$scope.oredering=new Array();
		$scope.baza = my_table_list;
		$scope.curPage = 0;
		$scope.pageSize = 20;
		$scope.names=$scope.baza.slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
		$scope.numberOfPages = function(){
		   return Math.ceil($scope.filtering_table().length / $scope.pageSize);
	   };
	   $scope.filtering_table=function(){
		   var new_searched_date_array=new Array;
		   new_searched_date_array=[];
		   angular.forEach($scope.baza,function(value,key){
			   var catched=0;
			   angular.forEach(value,function(value_loc,key_loc){
				   if((''+value_loc).indexOf($scope.searchText)!=-1 || $scope.searchText=='' || typeof($scope.searchText) == 'undefined')
					  catched=1;
			   })
			  if(catched)
				  new_searched_date_array.push(value);
		   })
		   if($scope.previsu_search_result != $scope.searchText){
			  
			  $scope.previsu_search_result=$scope.searchText;
			   $scope.ordering($scope.oredering[0],$scope.oredering[1], $scope.oredering[2]);
			   
		   }
		   if(new_searched_date_array.length<=$scope.pageSize)
		   		$scope.curPage = 0;
		   return new_searched_date_array;
	   }
	   $scope.curect=function(){
		   if( $scope.curPage<0){
				$scope.curPage=0;
		   }
		   if( $scope.curPage> $scope.numberOfPages()-1)
			   $scope.curPage=$scope.numberOfPages()-1;
		  $scope.names=$scope.filtering_table().slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
	   }
		
		$scope.ordering=function($event,order_by,revers){
		   if( typeof($event) != 'undefined' && typeof($event.currentTarget) != 'undefined')
		   		element=$event.currentTarget;
			else
				element=jQuery();
		   
			if(revers)
			  indicator='asc'
			else
			  indicator='desc'
			 $scope.oredering[0]=$event;
			 $scope.oredering[1]=order_by;
			 $scope.oredering[2]=revers;
			jQuery(element).parent().find('.manage-column').removeClass('sortable desc asc sorted');
			jQuery(element).parent().find('.manage-column').not(element).addClass('sortable desc');
			jQuery(element).addClass('sorted '+indicator);		  
			$scope.names=orderBy($scope.filtering_table(),order_by,revers).slice( $scope.curPage* $scope.pageSize,( $scope.curPage+1)* $scope.pageSize)
		}
	}
    </script>
		<?php
		$this->generete_jsone_list();
	}
	private function generete_jsone_list(){
		global $wpdb;
		$query = "SELECT `id`,`name` FROM ".wpda_contdown_extend_databese::$table_names['timer'];
		$rows=$wpdb->get_results($query);
		$json="[";
		$no_frst_storaket=1;
		foreach($rows as $row){
			$json.=(($no_frst_storaket) ? '' : ',' )."{";
			$no_frst_storaket=1;
			foreach($row as $key=>$value){
				if($key!='id'){
					$json.= "".(($no_frst_storaket) ? '' : ',' )."'".$key."':"."'".(($value)?preg_replace('/^\s+|\n|\r|\s+$/m', '',htmlspecialchars_decode(addslashes(strip_tags($value)))):'0')."'";				
				}
				else{					
					$json.= "".(($no_frst_storaket) ? '' : ',' )."'".$key."':".(($value)?htmlspecialchars_decode(addslashes($value)):'0'); 
				}
				
				$no_frst_storaket=0;
			 }			 
			 $json.="}";
		}
		$json.="]";
		return $json;
	}	
	
	private function generete_timer_parametrs($id=0){
		global $wpdb;	
		$timer_params = NULL;
		if($id)
			$timer_params = $wpdb->get_row('SELECT * FROM '.wpda_contdown_extend_databese::$table_names['timer'].' WHERE id='.$id);	
		if($timer_params==NULL){			
			foreach($this->options as $param_heading_key=>$param_heading_value){
				foreach($param_heading_value['params'] as $key=>$value){
					$this->options[$param_heading_key]['params'][$key]["value"]=$this->options[$param_heading_key]['params'][$key]["default_value"];
				}
			}
		}else{
			$databases_parametrs=json_decode($timer_params->option_value, true);
			foreach($this->options as $param_heading_key=>$param_heading_value){
				foreach($param_heading_value['params'] as $key=>$value){
					if(isset($databases_parametrs[$key])){
						$this->options[$param_heading_key]['params'][$key]["value"]=$databases_parametrs[$key];
					}else{
						$this->options[$param_heading_key]['params'][$key]["value"]=$this->options[$param_heading_key]['params'][$key]["default_value"];
					}
				}
			}
			return $timer_params->name;
		}
	}
	
	
	private function add_edit_timer($id=0){
		global $wpdb;
		$name=$this->generete_timer_parametrs($id);
		?>		         
		<form action="admin.php?page=wpda_contdown_extend_menu<?php if($id) echo '&id='.$id; ?>" method="post" name="adminForm" class="top_description_table" id="adminForm">
            <div class="conteiner">
                <div class="header">
                    <span><h2 class="wpda_timer_title"><?php if($id) {echo "Edit Timer ".(isset($name)?'<span style="color:#2abf00">'.$name.'</span>':'');}else{echo "Add Timer";} ?></h2></span>
                    <div class="header_action_buttons">
                        <span><input type="button" onclick="submitbutton('save_timer')" value="Save" class="button-primary action"> </span> 
                        <span><input type="button" onclick="submitbutton('update_timer')" value="Apply" class="button-primary action"> </span> 
                        <span><input type="button" onclick="window.location.href='admin.php?page=wpda_contdown_extend_menu'" value="Cancel" class="button-secondary action"> </span> 
                    </div>
                </div>
                <div class="option_panel">            
                    <div class="parametr_name"></div>
                    <div class="all_options_panel">
                        <input type="text" class="timer_name" name="name" placeholder="Enter name here" value="<?php echo isset($name)?$name:'' ?>" >
                        <div class="wpda_timer_link_tabs">
							<?php
								echo "<ul>";
								foreach($this->options as $params_grup_name =>$params_group_value){ 
									echo '<li id="'.$params_grup_name.'_tab">'.$params_group_value['heading_name'].'</li>';
								}
								echo "</ul>";
							?>
						</div>
                        <table>
						<?php 
						foreach($this->options as $params_grup_name =>$params_group_value){ 
							wpda_contdown_extend_library::create_table_heading($params_group_value['heading_name'],$params_grup_name);
							foreach($params_group_value['params'] as $param_name => $param_value){
								$args=array(
									"name"=>$param_name,
									"heading_name"=>$params_group_value['heading_name'],
									"heading_group"=>$params_grup_name,
								);
								$args=array_merge($args,$param_value);			
								$function_name=$param_value['function_name'];
								wpda_contdown_extend_library::$function_name($args);
							}
						}

						?>
					</table>
                    </div>
                </div>
            </div>
		</form>
		<?php

		 
	}
	private function border_types(){
		$border_type[ 'dotted' ] = 'dotted';
		$border_type[ 'dashed' ] = 'dashed';
		$border_type[ 'solid' ] = 'solid';
		$border_type[ 'double' ] = 'double';
		$border_type[ 'groove' ] = 'groove';
		$border_type[ 'ridge' ] = 'ridge';
		$border_type[ 'inset' ] = 'inset';	
		$border_type[ 'outset' ] = 'outset';
		return $border_type;
	}
	private function fonts_options(){
		  $font_choices[ 'Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial *';
		  $font_choices[ 'Arial Black,Arial Bold,Arial,sans-serif' ] = 'Arial Black *';
		  $font_choices[ 'Arial Narrow,Arial,Helvetica Neue,Helvetica,sans-serif' ] = 'Arial Narrow *';
		  $font_choices[ 'Courier,Verdana,sans-serif' ] = 'Courier *';
		  $font_choices[ 'Georgia,Times New Roman,Times,serif' ] = 'Georgia *';
		  $font_choices[ 'Times New Roman,Times,Georgia,serif' ] = 'Times New Roman *';
		  $font_choices[ 'Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Arial,sans-serif' ] = 'Trebuchet MS *';
		  $font_choices[ 'Verdana,sans-serif' ] = 'Verdana *';
		  $font_choices[ 'American Typewriter,Georgia,serif' ] = 'American Typewriter';
		  $font_choices[ 'Andale Mono,Consolas,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Andale Mono';
		  $font_choices[ 'Baskerville,Times New Roman,Times,serif' ] = 'Baskerville';
		  $font_choices[ 'Bookman Old Style,Georgia,Times New Roman,Times,serif' ] = 'Bookman Old Style';
		  $font_choices[ 'Calibri,Helvetica Neue,Helvetica,Arial,Verdana,sans-serif' ] = 'Calibri';
		  $font_choices[ 'Cambria,Georgia,Times New Roman,Times,serif' ] = 'Cambria';
		  $font_choices[ 'Candara,Verdana,sans-serif' ] = 'Candara';
		  $font_choices[ 'Century Gothic,Apple Gothic,Verdana,sans-serif' ] = 'Century Gothic';
		  $font_choices[ 'Century Schoolbook,Georgia,Times New Roman,Times,serif' ] = 'Century Schoolbook';
		  $font_choices[ 'Consolas,Andale Mono,Monaco,Courier,Courier New,Verdana,sans-serif' ] = 'Consolas';
		  $font_choices[ 'Constantia,Georgia,Times New Roman,Times,serif' ] = 'Constantia';
		  $font_choices[ 'Corbel,Lucida Grande,Lucida Sans Unicode,Arial,sans-serif' ] = 'Corbel';
		  $font_choices[ 'Franklin Gothic Medium,Arial,sans-serif' ] = 'Franklin Gothic Medium';
		  $font_choices[ 'Garamond,Hoefler Text,Times New Roman,Times,serif' ] = 'Garamond';
		  $font_choices[ 'Gill Sans MT,Gill Sans,Calibri,Trebuchet MS,sans-serif' ] = 'Gill Sans MT';
		  $font_choices[ 'Helvetica Neue,Helvetica,Arial,sans-serif' ] = 'Helvetica Neue';
		  $font_choices[ 'Hoefler Text,Garamond,Times New Roman,Times,sans-serif' ] = 'Hoefler Text';
		  $font_choices[ 'Lucida Bright,Cambria,Georgia,Times New Roman,Times,serif' ] = 'Lucida Bright';
		  $font_choices[ 'Lucida Grande,Lucida Sans,Lucida Sans Unicode,sans-serif' ] = 'Lucida Grande';
		  $font_choices[ 'Palatino Linotype,Palatino,Georgia,Times New Roman,Times,serif' ] = 'Palatino Linotype';
		  $font_choices[ 'Tahoma,Geneva,Verdana,sans-serif' ] = 'Tahoma';
		  $font_choices[ 'Rockwell, Arial Black, Arial Bold, Arial, sans-serif' ] = 'Rockwell';
		  $font_choices[ 'Segoe UI' ] = 'Segoe UI';
		  return $font_choices;
	}
	private function select_font_with_label($select_name,$main_value='',$bind=''){
		?>
        
		<select class="wpda_gallselect" name="<?php echo 'parametrs['.$select_name.']'; ?>" id="<?php echo $select_name ?>" >
		<?php
		
		foreach($this->fonts_options() as $key => $value){
			?>
			<option <?php selected($key,$main_value) ?> value="<?php echo $key ?>" ><?php echo $value ?></option>
			<?php 					
		}
		?>
		</select>																

		<?php
	}
	private function select_border_with_label($select_name,$main_value='',$bind=''){
		?>
		<select class="wpda_gallselect" name="<?php echo 'parametrs['.$select_name.']'; ?>" id="<?php echo $select_name ?>" >
		<?php
		
		foreach($this->border_types() as $key => $value){
			?>
			<option <?php selected($key,$main_value) ?> value="<?php echo $key ?>"><?php echo $value ?></option>
			<?php 					
		}
		?>
		</select>																

		<?php
	}
	private function hex2rgba($color, $opacity = false) {

		$default = 'rgba(0,0,0,1)';
		$opacity=$opacity/100;
		if(empty($color))
			  return $default; 
			if ($color[0] == '#' ) {
				$color = substr( $color, 1 );
			}	
			if (strlen($color) == 6) {
					$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
			} elseif ( strlen( $color ) == 3 ) {
					$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
			} else {
					return $default;
			}
			$rgb =  array_map('hexdec', $hex);
			if($opacity){
				if(abs($opacity) > 1)
					$opacity = 1.0;
				$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
			} else {
				$output = 'rgb('.implode(",",$rgb).')';
			}
			return $output;
	}
	private static function timezone_array(){
		return array(
			'Pacific/Midway'       => "(GMT-11:00) Midway Island",
			'US/Samoa'             => "(GMT-11:00) Samoa",
			'US/Hawaii'            => "(GMT-10:00) Hawaii",
			'US/Alaska'            => "(GMT-09:00) Alaska",
			'US/Pacific'           => "(GMT-08:00) Pacific Time (US &amp; Canada)",
			'America/Tijuana'      => "(GMT-08:00) Tijuana",
			'US/Arizona'           => "(GMT-07:00) Arizona",
			'US/Mountain'          => "(GMT-07:00) Mountain Time (US &amp; Canada)",
			'America/Chihuahua'    => "(GMT-07:00) Chihuahua",
			'America/Mazatlan'     => "(GMT-07:00) Mazatlan",
			'America/Mexico_City'  => "(GMT-06:00) Mexico City",
			'America/Monterrey'    => "(GMT-06:00) Monterrey",
			'Canada/Saskatchewan'  => "(GMT-06:00) Saskatchewan",
			'US/Central'           => "(GMT-06:00) Central Time (US &amp; Canada)",
			'US/Eastern'           => "(GMT-05:00) Eastern Time (US &amp; Canada)",
			'US/East-Indiana'      => "(GMT-05:00) Indiana (East)",
			'America/Bogota'       => "(GMT-05:00) Bogota",
			'America/Lima'         => "(GMT-05:00) Lima",
			'America/Caracas'      => "(GMT-04:30) Caracas",
			'Canada/Atlantic'      => "(GMT-04:00) Atlantic Time (Canada)",
			'America/La_Paz'       => "(GMT-04:00) La Paz",
			'America/Santiago'     => "(GMT-04:00) Santiago",
			'Canada/Newfoundland'  => "(GMT-03:30) Newfoundland",
			'America/Buenos_Aires' => "(GMT-03:00) Buenos Aires",
			'Greenland'            => "(GMT-03:00) Greenland",
			'Atlantic/Stanley'     => "(GMT-02:00) Stanley",
			'Atlantic/Azores'      => "(GMT-01:00) Azores",
			'Atlantic/Cape_Verde'  => "(GMT-01:00) Cape Verde Is.",
			'Africa/Casablanca'    => "(GMT) Casablanca",
			'Europe/Dublin'        => "(GMT) Dublin",
			'Europe/Lisbon'        => "(GMT) Lisbon",
			'Europe/London'        => "(GMT) London",
			'Africa/Monrovia'      => "(GMT) Monrovia",
			'Europe/Amsterdam'     => "(GMT+01:00) Amsterdam",
			'Europe/Belgrade'      => "(GMT+01:00) Belgrade",
			'Europe/Berlin'        => "(GMT+01:00) Berlin",
			'Europe/Bratislava'    => "(GMT+01:00) Bratislava",
			'Europe/Brussels'      => "(GMT+01:00) Brussels",
			'Europe/Budapest'      => "(GMT+01:00) Budapest",
			'Europe/Copenhagen'    => "(GMT+01:00) Copenhagen",
			'Europe/Ljubljana'     => "(GMT+01:00) Ljubljana",
			'Europe/Madrid'        => "(GMT+01:00) Madrid",
			'Europe/Paris'         => "(GMT+01:00) Paris",
			'Europe/Prague'        => "(GMT+01:00) Prague",
			'Europe/Rome'          => "(GMT+01:00) Rome",
			'Europe/Sarajevo'      => "(GMT+01:00) Sarajevo",
			'Europe/Skopje'        => "(GMT+01:00) Skopje",
			'Europe/Stockholm'     => "(GMT+01:00) Stockholm",
			'Europe/Vienna'        => "(GMT+01:00) Vienna",
			'Europe/Warsaw'        => "(GMT+01:00) Warsaw",
			'Europe/Zagreb'        => "(GMT+01:00) Zagreb",
			'Europe/Athens'        => "(GMT+02:00) Athens",
			'Europe/Bucharest'     => "(GMT+02:00) Bucharest",
			'Africa/Cairo'         => "(GMT+02:00) Cairo",
			'Africa/Harare'        => "(GMT+02:00) Harare",
			'Europe/Helsinki'      => "(GMT+02:00) Helsinki",
			'Europe/Istanbul'      => "(GMT+02:00) Istanbul",
			'Asia/Jerusalem'       => "(GMT+02:00) Jerusalem",
			'Europe/Kiev'          => "(GMT+02:00) Kyiv",
			'Europe/Minsk'         => "(GMT+02:00) Minsk",
			'Europe/Riga'          => "(GMT+02:00) Riga",
			'Europe/Sofia'         => "(GMT+02:00) Sofia",
			'Europe/Tallinn'       => "(GMT+02:00) Tallinn",
			'Europe/Vilnius'       => "(GMT+02:00) Vilnius",
			'Asia/Baghdad'         => "(GMT+03:00) Baghdad",
			'Asia/Kuwait'          => "(GMT+03:00) Kuwait",
			'Africa/Nairobi'       => "(GMT+03:00) Nairobi",
			'Asia/Riyadh'          => "(GMT+03:00) Riyadh",
			'Europe/Moscow'        => "(GMT+03:00) Moscow",
			'Asia/Tehran'          => "(GMT+03:30) Tehran",
			'Asia/Baku'            => "(GMT+04:00) Baku",
			'Europe/Volgograd'     => "(GMT+04:00) Volgograd",
			'Asia/Muscat'          => "(GMT+04:00) Muscat",
			'Asia/Tbilisi'         => "(GMT+04:00) Tbilisi",
			'Asia/Yerevan'         => "(GMT+04:00) Yerevan",
			'Asia/Kabul'           => "(GMT+04:30) Kabul",
			'Asia/Karachi'         => "(GMT+05:00) Karachi",
			'Asia/Tashkent'        => "(GMT+05:00) Tashkent",
			'Asia/Kolkata'         => "(GMT+05:30) Kolkata",
			'Asia/Kathmandu'       => "(GMT+05:45) Kathmandu",
			'Asia/Yekaterinburg'   => "(GMT+06:00) Ekaterinburg",
			'Asia/Almaty'          => "(GMT+06:00) Almaty",
			'Asia/Dhaka'           => "(GMT+06:00) Dhaka",
			'Asia/Novosibirsk'     => "(GMT+07:00) Novosibirsk",
			'Asia/Bangkok'         => "(GMT+07:00) Bangkok",
			'Asia/Jakarta'         => "(GMT+07:00) Jakarta",
			'Asia/Krasnoyarsk'     => "(GMT+08:00) Krasnoyarsk",
			'Asia/Chongqing'       => "(GMT+08:00) Chongqing",
			'Asia/Hong_Kong'       => "(GMT+08:00) Hong Kong",
			'Asia/Kuala_Lumpur'    => "(GMT+08:00) Kuala Lumpur",
			'Australia/Perth'      => "(GMT+08:00) Perth",
			'Asia/Singapore'       => "(GMT+08:00) Singapore",
			'Asia/Taipei'          => "(GMT+08:00) Taipei",
			'Asia/Ulaanbaatar'     => "(GMT+08:00) Ulaan Bataar",
			'Asia/Urumqi'          => "(GMT+08:00) Urumqi",
			'Asia/Irkutsk'         => "(GMT+09:00) Irkutsk",
			'Asia/Seoul'           => "(GMT+09:00) Seoul",
			'Asia/Tokyo'           => "(GMT+09:00) Tokyo",
			'Australia/Adelaide'   => "(GMT+09:30) Adelaide",
			'Australia/Darwin'     => "(GMT+09:30) Darwin",
			'Asia/Yakutsk'         => "(GMT+10:00) Yakutsk",
			'Australia/Brisbane'   => "(GMT+10:00) Brisbane",
			'Australia/Canberra'   => "(GMT+10:00) Canberra",
			'Pacific/Guam'         => "(GMT+10:00) Guam",
			'Australia/Hobart'     => "(GMT+10:00) Hobart",
			'Australia/Melbourne'  => "(GMT+10:00) Melbourne",
			'Pacific/Port_Moresby' => "(GMT+10:00) Port Moresby",
			'Australia/Sydney'     => "(GMT+10:00) Sydney",
			'Asia/Vladivostok'     => "(GMT+11:00) Vladivostok",
			'Asia/Magadan'         => "(GMT+12:00) Magadan",
			'Pacific/Auckland'     => "(GMT+12:00) Auckland",
			'Pacific/Fiji'         => "(GMT+12:00) Fiji",
		);
	}
	
}


 ?>