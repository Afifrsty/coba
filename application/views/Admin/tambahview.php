<?php include(APPPATH.'views/admin/header.php'); ?>

	Kelas : Admin
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Tambah User</div>

	<form method="POST" action="http://localhost/parkir/admin/tambah/add_user">
		<div class="halaman-tambah">
		<div class="garis-tambah"></div>
		<div>
	    <input type="text" name="id" hidden="true" value="id" />
	  </div>
	  <div>
	    <input type="text" name="nama" placeholder="nama" value="" />
	  </div>
	  <div>
	    <input type="text" name="username" placeholder="username" value="" />
	  </div>
	  <div>
	    <input type="text" name="password" placeholder="password" />
	  </div>
		<label class="label-container">Pilih Level :</label>
	  <div class="combo-container">
	    <select name="level" class="combo">
	    	<optgroup><option value="admin">Admin</option></optgroup>
	    	<optgroup><option value="P_Masuk">Petugas Masuk</option></optgroup>
	    	<optgroup><option value="P_Keluar">Petugas Keluar</option></optgroup>
	    </select>
	  </div>
	  <div>
	    <a href="<?=base_url('');?>admin/home" class="submit btn-submit hvr-radial-out">
	    Kembali
	    </a>
	    <button class="hvr-radial-out button" type="submit">Simpan</button>
	  </div>
	  </div>
	</form>
	

<?php include(APPPATH.'views/admin/footer.php'); ?>