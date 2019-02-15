<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        // $this->load->Helper('api');
        $this->load->Model('user');
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    public function place(){
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            if(isset($_POST['name'])){
                if($this->user->checkToken($token)){
                        
                        $name = (isset($_POST['name'])) ? $_POST['name'] : '';
                        $latitude = (isset($_POST['latitude'])) ? $_POST['latitude'] : '';
                        $longitude = (isset($_POST['longitude'])) ? $_POST['longitude'] : '';
                        $x = (isset($_POST['x'])) ? $_POST['x'] : '';
                        $y = (isset($_POST['y'])) ? $_POST['y'] : '';
                        $image = (isset($_POST['image'])) ? $_POST['image'] : '';
                        $description = (isset($_POST['description'])) ? $_POST['description'] : '';

                        if($name != ''&&$latitude != ''&&$longitude  != ''&&$x != ''&&$y != ''){
                            if($this->user->checkAdmin($token)){

                                $add = $this->db->insert('place', [
                                    'name' => $name,
                                    'latitude' => $latitude,
                                    'longitude' => $longitude,
                                    'x' => $x,
                                    'y' => $y,
                                    'image' => $image,
                                    'description' => $description
                                ]);
                                if($add){
                                    $this->response('200', [
                                        'response' => 'create success'
                                    ]);
                                }else{
                                    $this->response('422', [
                                        'response' => 'Data cannot be process'
                                    ]);
                                }

                            }else{
                                $this->response('401', [
                                    'response' => 'Unauthorization',
                                    'detail' => 'not admin'
                                ]);
                            }
                        }else{
                            $this->response('400', [
                                'response' => 'Empty'
                            ]);
                        }


                }else{
                    $this->response('401', [
                        'response' => 'Unauthorization'
                    ]);
                }
            }else{
                $r = $this->db->get('place');
                if($r->num_rows() > 0){
                    $this->response('200', [
                        'response' => 'data fetch'.$r->num_rows(),
                        'data' => $r->result()
                    ]);
                }else{
                    $this->response('200', [
                        'response' => 'no data'
                    ]);
                }
            }
        }
    }
    public function actionplace($id = ''){
        $token = isset($_GET['token']) ? $_GET['token'] : '';
        if($this->user->checkToken($token)){
            if($_SERVER['REQUEST_METHOD'] == "DELETE"){
                if($this->user->checkAdmin($token)){
                    $this->db->where('id', $id);
                $del = $this->db->delete('place');
                if($del){
                    $this->response('200', [
                        'response' => 'Delete success'
                    ]);
                }else{
                    $this->response('400', [
                        'response' => 'data cannot be delete'
                    ]);
                }
                }else{
                    $this->response('401', [
                        'response' => 'Unauthorization',
                        'detail' => 'not admin'
                    ]);
                }

            }else if($_SERVER['REQUEST_METHOD'] == "POST"){


                $name = (isset($_POST['name'])) ? $_POST['name'] : '';
                        $latitude = (isset($_POST['latitude'])) ? $_POST['latitude'] : '';
                        $longitude = (isset($_POST['longitude'])) ? $_POST['longitude'] : '';
                        $x = (isset($_POST['x'])) ? $_POST['x'] : '';
                        $y = (isset($_POST['y'])) ? $_POST['y'] : '';
                        $image = (isset($_POST['image'])) ? $_POST['image'] : '';
                        $description = (isset($_POST['description'])) ? $_POST['description'] : '';

                        if($name != ''&&$latitude != ''&&$longitude  != ''&&$x != ''&&$y != ''){
                            $this->db->set([
                                'name' => $name,
                                'latitude' => $latitude,
                                'longitude' => $longitude,
                                'x' => $x,
                                'y' => $y,
                                'image' => $image,
                                'description' => $description
                            ]);
                            if($this->user->checkAdmin($token)){
                                $this->db->where('id', $id);
                            $add = $this->db->update('place');
                            if($add){
                                $this->response('200', [
                                    'response' => 'update success'
                                ]);
                            }else{
                                $this->response('400', [
                                    'response' => 'Data cannot be updated'
                                ]);
                            }
                            }else{
                                $this->response('401', [
                                    'response' => 'Unauthorization',
                                    'detail' => 'not admin'
                                ]);
                            }
                        }else{
                            $this->response('400', [
                                'response' => 'Empty'
                            ]);
                        }


            }else if($_SERVER['REQUEST_METHOD'] == "GET"){
                $r = $this->db->get_where('place', ['id'=>$id]);
                $this->response('400', [
                    'response' => 'data place ('.$r->num_rows().')',
                    'data' => $r->result()
                ]);
            }else{
                $this->response('400', [
                    'response' => 'badmethod'
                ]);
            }       
        }else{
            $this->response('401', [
                'response' => 'Unauthorization'
            ]);
        }
    }
    public function response($code, $msg){
        // header('HTTP/1.0 '.$code.$msg['response']);
        header('HTTP/1.0 '.$code.' '.$msg['response']);
        echo json_encode($msg);
    }
}
