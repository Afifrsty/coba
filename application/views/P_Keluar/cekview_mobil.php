<?php include(APPPATH.'views/P_Keluar/header.php'); ?>

	Kelas : Petugas Keluar
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">mobil</div>
	<img class="gambar-mobil" id="mob" style="position: absolute; left: 250px; top: 5px;" src="http://localhost/parkir/gambar/mobil.png" width="100">
	<div class="canvas-cek">
	<div class="font-cek">-Cek mobil-</div>
	<input type="text" name="id" disabled="true" value="Id mobil : <?php echo $id ?>" />
	<input type="text" name="plat" disabled="true" value="Plat Nomor : <?php echo $plat ?>" />
	<input type="text" name="kendaraan" disabled="true" value="Kendaraan : <?php echo $kendaraan ?>" />
	<input type="text" name="masuk" disabled="true" value="Masuk : <?php echo $masuk ?>" />
	<input type="text" name="keluar" disabled="true" value="Keuar : <?php echo $keluar ?>" />
	<div class="garis-tepi-kanan"></div>
	<div class="garis-tepi-kiri"></div>
	<a href="<?=base_url();?>P_Keluar/home">
	<button class="hvr-radial-out button" type="submit">Oke</button>
	</a>
	</div>

<?php include(APPPATH.'views/P_Keluar/footer.php'); ?>