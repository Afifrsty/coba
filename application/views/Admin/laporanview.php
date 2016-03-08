<?php include(APPPATH.'views/admin/header.php'); ?>

	Kelas : admin
	<br>
	---------------------------------------
	</div>
	</div>

	<div class="halaman">Lihat Laporan</div>

<?php
if(!empty($is_data))
{
?>

	<table class="table-user" >
		
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Plat Nomor</th>
			<th>Kendaraan</th>
			<th>Petugas Masuk</th>
			<th>Masuk</th>
			<th>Petugas Keluar</th>
			<th>Keluar</th>
			<th>Harga</th>
		</tr>
		<?php $no=1; ?>
		<?php foreach($is_data['results'] as $row) { ?>

		<tr>
		
			<th><?php echo $no++; ?></th>
			<td><?= $row->id;?></td>
			<td><?= $row->plat; ?></td>
			<td><?= $row->kendaraan; ?></td>
			<td><?= $row->petugas; ?></td>
			<td><?= $row->masuk; ?></td>
			<td><?= $row->petugas_keluar; ?></td>
			<td><?= $row->keluar; ?></td>
			<td><?= $row->harga; ?></td>
		</tr>
		<?php } ?>
		
	</table>

<?php }else{ ?>
<div class="alert alert-error"></div>
<?php } ?>
<center>
<div style="position: absolute;top:130px;right:300px;">
<?= $is_data['links']; ?>
</div>
<a href="<?=base_url()."admin/home";?>"><img class="kembali" src="<?=base_url();?>gambar/kembali.png" style="position:relative;top:520px;" width="40"></a>
</center>
<?php include(APPPATH.'views/admin/footer.php'); ?>