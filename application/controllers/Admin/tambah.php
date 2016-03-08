<?php 
/**
* Autor : Dani Ahmad J. - XI Rpl 1 SMK N 1 Surabaya
*/
class Tambah extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('account_model');
	}
	
	public function index()
	{
		$this->load->view('admin/tambahview');
	}

	public function add_user()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('level', 'level', 'trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$data['content'] = 'login';
			$this->load->view('admin/tambahview', $data);
		}
		
		else
		{			
			if($query = $this->account_model->buat_akun())
			{
				$this->session->set_flashdata('success', '<div class="validasi-font animate11 bounceIn">Tambah User Sukses !!</div>');
				redirect('admin/home');
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="validasi-font animate11 bounceIn">Database Tambah User error</div>');
				redirect('admin/home');			
			}
		}
		
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
		if($res != "admin"){
			$this->session->set_flashdata('msg', '<div class="validasi-font">anda tidak berhak masuk ke akun ini');
			redirect('login');		
		}			
	}
}
?>