<?php
/**
* Autor : Dani Ahmad J. / XI-Rpl 1 SMK N 1 Surabaya
*/
class Motor extends CI_Controller
{
	
	function index()
	{
		$this->load->view('P_Masuk/motorview');
	}

	public function masuk()
	{
		$id = $_POST['id'];
		$plat = $_POST['plat'];
		$kendaraan = $_POST['kendaraan'];
		$masuk = $_POST['masuk'];
		$harga = $_POST['harga'];
		$petugas = $_POST['petugas'];
		$data = array(
				'id' => $id, 
				'plat' => $plat, 
				'kendaraan' => $kendaraan, 
				'masuk' => $masuk, 
				'harga' => $harga, 
				'petugas' => $petugas, 
			);
		$res = $this->db->insert('karcis', $data );
		if ($res>=1) 
		{
			redirect('P_Masuk/home');
		}
		else
		{
			echo "Tambah Data Gagal";
		}
	}
}
?>