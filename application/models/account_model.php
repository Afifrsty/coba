<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {
	
	private $table_name = 'user';
	private $pk = 'username';
	
	public function validasi()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get($this->table_name);
		
		if($query->num_rows == 1)
		{
			return true;
		}		
	}
	
	public function buat_akun()
	{
		$data_baru = array(
			'id' => $this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),			
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')						
		);
		
		$simpan_data = $this->db->insert($this->table_name, $data_baru);
		return $simpan_data;
	}
	
	public function lihat_data($username){
		$query = $this->db->get_where($this->table_name, array($this->pk => $username));
		return $query->row_array();
	}
	
}
/* End of file account_model.php */
/* Location: ./application/models/account_model.php */