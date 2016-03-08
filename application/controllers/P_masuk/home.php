<?php
session_start();
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
		$this->is_logged_in();
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('P_masuk/masukview', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}

	public function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			$this->session->set_flashdata('msg', '<div class="validasi-font">Mohon untuk Login terlebih dulu');
			redirect('login');		
		}

		$this->load->model('login_model');
		$username = $this->session->userdata('username');
		$role=$this->login_model->get("where username = '$username'");
		$res = $role[0]['level'];
		if($res != "P_Masuk"){
			$this->session->set_flashdata('msg', '<div class="validasi-font">anda tidak berhak masuk ke akun ini');
			redirect('login');		
		}			
	}
}
?>