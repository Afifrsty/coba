<?php include(APPPATH.'views/P_Keluar/header.php'); ?>

	Kelas : Petugas Keluar
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Mobil</div>

	<img class="gambar-mobil" id="mob" style="position: absolute; left: 250px; top: 5px;" src="http://localhost/parkir/gambar/mobil.png" width="100">

	<div class="plat">-Masukkan Plat Nomor-</div>
	
	<div class="canvas-motor">
	
	<form method="POST" action="<?=base_url();?>P_Keluar/mobil/edit_Parkir">
		<input class="plat-motor" placeholder="Masukkan Plat Nomor..." type="text" name="plat" />
		<input class="plat-motor" hidden="true" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s d/m/Y'); ?>" type="text" name="keluar" />
		<input class="plat-motor" hidden="true" value="<?= $this->session->userdata('username'); ?>" type="text" name="petugas_keluar" />
	</div>
	<div class="garis1"></div>
	<a href="<?=base_url('');?>P_Keluar/home" style="position: absolute; top: 345px; right: 300px; background-color:rgb(18, 130, 94);" class="submit btn-submit hvr-radial-out">
	    Kembali
	</a>
	<button class="hvr-radial-out button" type="submit" style="position: absolute; top: 350px; right: 190px; background-color:rgb(18, 130, 94);">Simpan</button>
	</form>

<?php include(APPPATH.'views/P_Keluar/footer.php'); ?>