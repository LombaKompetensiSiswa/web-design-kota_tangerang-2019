<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
		// echo password_hash('adminpass', PASSWORD_DEFAULT);
		// "WlxnQjLJmcClLolgdCuDUAzduEvZXPzH+EB2h/uRRUmE9cqjO8cBfz1MhTIYnS9MS8fWPmfORX0btbt0xnlwQQ==
	}
	public function place(){
		$this->load->view('place');
	}
	public function search(){
		$this->load->view('search');
	}
}
