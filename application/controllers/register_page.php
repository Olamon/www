<?php 
	
class Register_page extends CI_Controller 
{
		
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index() {
		
		$this->load->view('templates/header');
		$this->load->view('register_view');
		$this->load->view('templates/footer');
	}
	
	public function register() {
		$this->user_model->add();	
	}
		
}

?>