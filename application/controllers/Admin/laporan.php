<?php
/**
* Autor : Dani Ahmad J. / XI-Rpl 1 SMK N 1 Surabaya
*/
class Laporan extends CI_Controller
{
	
	function index()
	{
		$this->load->model('model_pagination');
		$getParkir['is_data']=$this->model_pagination->getParkir();
		$this->load->view('Admin/laporanview', $getParkir);
	}
}
?>