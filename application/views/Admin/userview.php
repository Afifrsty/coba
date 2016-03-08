<?php include(APPPATH.'views/admin/header.php'); ?>

	Kelas : admin
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Lihat User</div>

<?php
if(!empty($is_data))
{
?>

	<table class="table-user" vd>
		
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Kelas</th>
			<th>Pengaturan</th>
		</tr>
		<?php $no=1; ?>
		<?php foreach($is_data['results'] as $row) { ?>

		<tr>
		
			<th><?php echo $no++; ?></th>
			<td><?= $row->nama;?></td>
			<td><?= $row->username; ?></td>
			<td><?= $row->level; ?></td>
			<td>
				<center>
				<a href="<?=base_url()."admin/lihat_user/edit_user/".$row->id;?>"><img width="20" src="<?=base_url();?>gambar/ubah.png"></a>
				&nbsp;
				&nbsp;
				&nbsp;
				<a onclick="return confirm('Apakah anda yakin ingin menghapus ini?')" href="<?=base_url()."admin/lihat_user/hapus/".$row->id;?>"><img width="20" src="<?=base_url();?>gambar/hapus.png"></a>
				</center>
			</td>
		</tr>
		<?php } ?>
		
	</table>

<?php }else{ ?>
<div class="alert alert-error"></div>
<?php } ?>
<center>
<?= $is_data['links']; ?>

<a href="<?=base_url()."admin/home";?>"><img class="kembali" src="<?=base_url();?>gambar/kembali.png" style="position:relative;top:350px;" width="40"></a>

<?php include(APPPATH.'views/admin/footer.php'); ?>