<?php include(APPPATH.'views/P_Masuk/header.php'); ?>

	Kelas : Petugas Masuk
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Beranda</div>

		<a href="<?=base_url();?>P_Masuk/mobil"><div class="menuhome" id="mobil"><div class="mobil">
		Mobil
		<img class="gambar-mobil" src="http://localhost/parkir/gambar/mobil.png" width="100">
		</div></div></a>
		<a href="<?=base_url();?>P_Masuk/motor"><div class="menuhome1" id="motor" ><div class="motor">
		Motor
		<img class="gambar-motor" src="http://localhost/parkir/gambar/motor.png" width="160">
		</div></div></a>

<?php include(APPPATH.'views/P_Masuk/footer.php'); ?>