<?php include(APPPATH.'views/P_Masuk/header.php'); ?>

	Kelas : Petugas Masuk
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Motor</div>

	<img class="gambar-motor" id="mot" style="position: absolute; left: 250px; top: 40px;" src="http://localhost/parkir/gambar/motor.png" width="160">

	<div class="plat">-Masukkan Plat Nomor-</div>

	<div class="canvas-motor">
	
	<form method="POST" action="<?=base_url();?>P_Masuk/motor/masuk">
		<input class="plat-motor" placeholder="Masukkan Plat Nomor..." type="text" name="plat" />
		<input class="plat-motor" hidden="true" value="<?php echo rand(); ?>" type="text" name="id" />
		<input class="plat-motor" hidden="true" value="Motor" type="text" name="kendaraan" />
		<input class="plat-motor" hidden="true" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s d/m/Y'); ?>" type="text" name="masuk" />
		<input class="plat-motor" hidden="true" value="3000" type="text" name="harga" />
		<input class="plat-motor" hidden="true" value="<?= $this->session->userdata('username'); ?>" type="text" name="petugas" />
	</div>
	<div class="garis1"></div>
	<a href="<?=base_url('');?>P_Masuk/home" style="position: absolute; top: 345px; right: 300px; background-color:rgb(18, 130, 94);" class="submit btn-submit hvr-radial-out">
	    Kembali
	</a>
	<button class="hvr-radial-out button" type="submit" style="position: absolute; top: 350px; right: 190px; background-color:rgb(18, 130, 94);">Simpan</button>
	</form>
<?php include(APPPATH.'views/P_Masuk/footer.php'); ?>