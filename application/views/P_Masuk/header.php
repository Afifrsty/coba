<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Parkir</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/admin.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/lihat_user.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/hover.css">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/animate.delay.css">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/animate.min.css">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/select2.css">
  	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/parkir.css">
	<script type="text/javascript" src="<?=base_url();?>js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="<?=base_url();?>js/select2.min.js"></script>
  	<script type="text/javascript" src="<?=base_url();?>js/admin.js"></script>

<script>
$(function() {
$("#datepicker2").datepicker({        
		 dateFormat: "dd-mm-yy",
		 showAnim:"slide",
    });
});
$(function() {
$("#datepicker3").datepicker({        
		 dateFormat: "dd-mm-yy",
		 showAnim:"slide",
    });
});
</script>

<script language="JavaScript">
function tampilkanjam()
{
var waktu = new Date();
var jam = waktu.getHours();
var menit = waktu.getMinutes();
var detik = waktu.getSeconds();
var teksjam = new String();

if ( menit <= 9 )
menit = "0" + menit;
if ( detik <= 9 )
detik = "0" + detik;

teksjam = "<h3 style='margin-top:0px;'>" + jam + ":" + menit + ":" + detik + "<h3>";
tempatjam.innerHTML = teksjam;
setTimeout ("tampilkanjam()",1000);
}
window.onload = tampilkanjam
</script>

</head>
<body>

<div class="profil animate2 bounceInDown" ><img src="http://localhost/parkir/gambar/profil.jpg" id="profil" class="circle"></div>
<button class="btn ganti-profil animate3 lightSpeedIn" id="btn" >Ganti Profil</button>

<div class="canvas animate6 fadeInUp">
	<div class="backname">
	<div class="cntr-name">
	Nama Petugas : <?= $this->session->userdata('username'); ?>
	<br>