<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

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
	public function storeroute(){
		if(isset($_GET['token'])){
            $token = $_GET['token'];
            if($this->user->checkToken($token)){

				$from_place_id = (isset($_POST['from_place_id'])) ? $_POST['from_place_id'] : '';
					$to_place_id = (isset($_POST['to_place_id'])) ? $_POST['to_place_id'] : '';
					$schedule_id = (isset($_POST['schedule_id'])) ? $_POST['schedule_id'] : '';
					$route = (isset($_POST['route'])) ? $_POST['route'] : '';
					if($from_place_id != ''&&$to_place_id != ''&&$route != ''&&$schedule_id != ''){
						$route = explode('/', $route);
						$route = json_encode($route);
						
						$add = $this->db->insert('route', [
					'from_place_id' => $from_place_id,
					'to_place_id' => $to_place_id,
					'schedule_id' => $schedule_id,
					'route' => $route
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
						$this->response('400', [
							'response' => 'Empty'
						]);
					}

			}else{
				$this->response('401', [
                    'response' => 'Unauthorization'
                ]);
			}
		}
	}
	public function routesearch($a,$b,$c){
		if($a != ''&&$b != ''&$c != ''){
			$r = $this->db->query("select * from route left join schedule on departure_time = '$c'");
			$this->response('200',[
				'response' => 'fetch data success',
				'data' => $r->result()
			]);
		}
	}
	public function response($code, $msg){
        // header('HTTP/1.0 '.$code.$msg['response']);
        header('HTTP/1.0 '.$code.' '.$msg['response']);
        echo json_encode($msg);
    }
}
