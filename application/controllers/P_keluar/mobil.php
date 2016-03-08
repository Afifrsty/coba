<?php
/**
* Autor : Dani Ahmad J. / XI-Rpl 1 SMK N 1 Surabaya
*/
class Mobil extends CI_Controller
{
	
	function index()
	{
		$this->load->view('P_Keluar/mobilview');
	}

	public function edit_Parkir()
	{
		$this->load->model('user_model');

		$this->load->model('login_model');
		$plat = $_POST['plat'];
		$role=$this->login_model->getKarcis("where plat = '$plat' and keluar = '' ");
		$res = $role[0]['id'];
		$ken = $role[0]['kendaraan'];
		$keluar = $role[0]['keluar'];
		
		if($ken == "Mobil" ){
			$this->user_model->editParkir($res);
			redirect('P_Keluar/mobil/cek_mobil/'.$res);
		}
		elseif($keluar != ""){
			echo "Plat Nomer yang anda masukkan sudah di catat";
		}
		else{
			echo "Plat Nomer yg anda masukkan bukan mobil";
		}
	}

	public function cek_mobil($res)
	{
		$this->load->model('login_model');
		$i =$this->login_model->getKarcis("where id = '$res'");
		$data = array(
			"id" => $i[0]['id'],
			"plat" => $i[0]['plat'],
			"kendaraan" => $i[0]['kendaraan'],
			"masuk" => $i[0]['masuk'],
			"keluar" => $i[0]['keluar'],
			);
		$this->load->view('P_Keluar/cekview_mobil', $data);
	}
}
?>