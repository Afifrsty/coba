<?php 
/**
* Autor : Dani Ahmad J. / XI - Rpl 1 SMK N 1 Surabaya
*/
class Lihat_user extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->model('model_pagination');
		$getUser['is_data']=$this->model_pagination->getUser();
		
		$this->load->view('admin/userview', $getUser);
	}

	public function hapus($id)
		{
			$where = array('id' => $id);
			$res = $this->user_model->hapusData('user', $where);
			if ($res>=1)
			{
				redirect('admin/lihat_user');
			}
			else
			{
				echo "Hapus Data Gagal";
			}

		}

	public function edit_user($id)
	{
		$mhs =$this->user_model->editView("where id = '$id'");
		$data = array(
			"id" => $mhs[0]['id'],
			"nama" => $mhs[0]['nama'],
			"username" => $mhs[0]['username'],
			"password" => $mhs[0]['password'],
			"level" => $mhs[0]['level'],
			);
		$this->load->view('admin/editview', $data);
	}

	public function edit($id)
	{
		$this->user_model->edit($id);
		redirect('admin/lihat_user');
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