<?php
class Login_model extends CI_Model
{
	function login($u_,$p_,$data)
	{
		$w=array(
				'username'=>$u_,
				);
			if($this->iksdb_library->IsBOF('user',$w)==FALSE)
			{
					$role=$this->iksdb_library->FieldRow('user',$w,"level");
					if($role=="admin")
					{
						$this->session->set_userdata($data);
						redirect(base_url('admin/home'));
					}elseif($role=="P_Masuk"){
						$this->session->set_userdata($data);
						redirect(base_url('P_Masuk/home'));
					}elseif($role=="P_Keluar"){
						$this->session->set_userdata($data);
						redirect(base_url('P_Keluar/home'));
					}else{
						
						redirect(base_url(),303);
					}
				}
				
			else{
				$this->session->set_flashdata('msg', 'Username atau password salah');
				redirect(base_url(),303);
			}
	}

	public function get($where="")
	{
		$data = $this->db->query('select * from user '.$where);
		return $data->result_array();
	}

	public function getKarcis($where="")
	{
		$data = $this->db->query('select * from karcis '.$where);
		return $data->result_array();
	}
}
?>