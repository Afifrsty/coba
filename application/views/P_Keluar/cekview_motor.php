<?php include(APPPATH.'views/P_Keluar/header.php'); ?>

	Kelas : Petugas Keluar
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Motor</div>
	<img class="gambar-motor" id="mot" style="position: absolute; left: 250px; top: 40px;" src="http://localhost/parkir/gambar/motor.png" width="160">
	<div class="canvas-cek">
	<div class="font-cek">-Cek Motor-</div>
	<input type="text" name="id" disabled="true" value="Id Motor : <?php echo $id ?>" />
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