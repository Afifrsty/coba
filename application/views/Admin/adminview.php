<?php include(APPPATH.'views/admin/header.php'); ?>

	Kelas : admin
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Beranda</div>
	<a href="<?=base_url();?>admin/lihat_user"><div class="menuhome" id="lihat" ><div class="lihat">
	Lihat User
	<img class="gambar-file" src="http://localhost/parkir/gambar/file.png" width="70">
	</div></div></a>
	<a href="<?=base_url();?>admin/tambah"><div class="menuhome1" id="tambah"><div class="tambah">
	Tambah<p>User <br>
	<img class="gambar-tambah" src="http://localhost/parkir/gambar/tambah.png" width="100">
	</div></div></a>

	<?php 
  if($this->session->flashdata('msg') != ''){
    echo '
          <div class="validasi-login animate10 bounceIn"><button type="button" class="close animate13 bounceIn" data-dismiss="alert">&times;</button>'.$this->session->flashdata('msg').'</div>
        ';
  }
  
  if($this->session->flashdata('success') != ''){
    echo '
          <div class="validasi-login1 animate10 bounceIn"><button type="button" class="close animate13 bounceIn" data-dismiss="alert">&times;</button>'.$this->session->flashdata('success').'</div>
        ';
  }    
?>

<?php include(APPPATH.'views/admin/footer.php'); ?>