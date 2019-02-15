<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
        $this->load->Helper('api');
    }
	public function index()
	{
		$this->load->view('welcome_message');
    }
    public function login(){
        if(isset($_POST['username'])){
        try{

            API::valid($_POST);
            $user =  $_POST['username'];
            $pass = $_POST['password'];
            $r = $this->db->get_where('users', ['username'=> $user])->result()[0];
            if(password_verify($pass, $r->password)){
                $token =  md5(date('dmyHis'));
                $this->db->set('token', $token);
                $this->db->where('username', $_POST['username']);
                $q = $this->db->update('users');

                if($q){
                    $this->response('200', [
                        'response' => 'login success',
                        'token' => $token,
                        'tole' => $r->role
                    ]);
                }else{
                    $this->response('401', [
                        'response' => 'login error'
                    ]);
                }
            }else{
                $this->response('401', [
                    'response' => 'password wrong'
                ]);
            }

        }catch(Exception $e){
            die($e);
        }
        }
    }
    public function logout(){
        if(isset($_GET['token'])){
            try{
                API::valid($_GET);
                $token =  $_GET['token'];
                $this->db->set('token', '');
                $this->db->where('token', $token);
                $q = $this->db->update('users');
                if($q){
                    $this->response('200', [
                        'response' => 'logout success'
                    ]);
                }else{
                    $this->response('401', [
                        'response' => 'logout error'
                    ]);
                }
    
            }catch(Exception $e){
                die($e);
            }
            }
    }
    public function response($code, $msg){
        // header('HTTP/1.0 '.$code.$msg['response']);
        header('HTTP/1.0 '.$code.' '.$msg['response']);
        echo json_encode($msg);
    }
}
