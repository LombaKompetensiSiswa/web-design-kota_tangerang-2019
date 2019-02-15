<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

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
    public function schedule(){
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            if($this->user->checkToken($token)){
                if($this->user->checkAdmin($token)){

                    $types = (isset($_POST['types'])) ? $_POST['types'] : '';
                    $line = (isset($_POST['line'])) ? $_POST['line'] : '';
                    $departure_time = (isset($_POST['departure_time'])) ? $_POST['departure_time'] : '';
                    $arrival_time = (isset($_POST['arrival_time'])) ? $_POST['arrival_time'] : '';
                    $distance = (isset($_POST['distance'])) ? $_POST['distance'] : '';
                    $speed = (isset($_POST['speed'])) ? $_POST['speed'] : '';
                    $from_place_id = (isset($_POST['from_place_id'])) ? $_POST['from_place_id'] : '';
					$to_place_id = (isset($_POST['to_place_id'])) ? $_POST['to_place_id'] : '';

                    if($from_place_id != ''&&$to_place_id != ''&&$types != ''&&$line != ''&&$departure_time != ''&&$arrival_time != ''&&$distance != ''&&$speed != ''){
                        $add = $this->db->insert('schedule', $_POST);
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
                        'response' => 'Unauthorization',
                        'detail' => 'not admin'
                    ]);
                }
            }else{
                $this->response('401', [
                    'response' => 'Unauthorization'
                ]);
            }
        }
    }
    public function deleteschedule($id){
        if(isset($_GET['token'])){
            $token = $_GET['token'];
            if($this->user->checkToken($token)){
                if($this->user->checkAdmin($token)){

                    $this->db->where('id', $id);
                    $del = $this->db->delete('schedule');
                    if($del){
                        $this->response('200', [
                            'response' => 'delete success'
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
                $this->response('401', [
                    'response' => 'Unauthorization'
                ]);
            }
        }
    }
    public function response($code, $msg){
        // header('HTTP/1.0 '.$code.$msg['response']);
        header('HTTP/1.0 '.$code.' '.$msg['response']);
        echo json_encode($msg);
    }
}
