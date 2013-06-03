<?php
	
class User_model extends CI_Model {
		
	public function __construct() {
		$this->load->database();
	}
	
	public function add() {
		$data = array(
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('pass')
		);
	
		if($this->db->insert('users',$data) === FALSE) return FALSE;
		return TRUE;
	}
	
	public function alter() {
	
	}
	
	public function verify() {
		$data = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass')
		);
		$query = $this->db->get_where('users',$data)->result();
		
		if(empty($query)) return FALSE;
		return TRUE;
		
	}
}

?>