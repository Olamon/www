<?php 
	
class Login_page extends CI_Controller 
{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index($msg = '') {
		$this->load->view('templates/header');
		if($msg === 'fail') $this->load->view('login_failure'); 
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}
	
	public function login() {

		if($this->user_model->verify()) {
			//user zweryfikowany, ustawiamy ciasteczko
			$session_data = array(
				//TODO user_id
				'logged_in' => TRUE,
			);
			$this->session->set_userdata($session_data);
			redirect('main_page','refresh');
		}
		else {
			redirect('/login_page/index/fail', 'refresh');
		}
	
	}
	
	public function logout() {
		//user wylogował się, usuwamy ciasteczko
		$this->session->unset_userdata('logged_in');
		redirect('main_page', 'refresh');	
	}
	
		
}

?>