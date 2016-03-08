</div>

<div class="animate5 fadeInDown">
<header id="header">
			 <nav class="dc-menu">
			  <a href="#" class="dc-menu-trigger "><span>Menu</span></a>
			  		<div class="menu-overlay">
			 			  <ul>
     <li><a href="<?=base_url();?>admin/home">Beranda</a></li> 
     <li><a href="<?=base_url();?>admin/laporan">Laporan Parkir</a></li>
     <li><a href="<?=base_url();?>admin/lihat_user">Lihat User</li> 
     <li><a href="<?=base_url();?>signout">keluar</a></li>
   </ul>
			  		</div>
			 </nav>
	</header>
</div>

<div class="kotak animate5 flip">
<div class="cntr">
<?php
            $tanggal = mktime(date("m"), date("d"), date("Y"));
            date_default_timezone_set('Asia/Jakarta');
            $jam=date("H:i:s");
            $a = date("H");
            if (($a>=1) && ($a<=11)){
              echo "Selamat Pagi ";
            }
            elseif (($a>=11) && ($a<=14)){
              echo "Selamat Siang ";
            }
            elseif (($a>=14) && ($a<=17)){
              echo "Selamat Sore ";
            }
            else{
              echo "Selamat Malam ";
            }
            
            ?>
</div>
<div class="kotak-dalam">
<div class="jam">
<span class="timeline-date" style="margin-bottom:0px; height:0px;"><div id="tempatjam"></div></span></div>
<div class="hari">
                                	<script language="javascript"> 
                        				var tanggallengkap = new String(); 
                        				var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu"); 
                        				namahari = namahari.split(" "); 
                        				var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober Nopember Desember"); 
                        				namabulan = namabulan.split(" "); 
                        				var tgl = new Date(); 
                        				var hari = tgl.getDay(); 
                        				var tanggal = tgl.getDate(); 
                        				var bulan = tgl.getMonth(); 
                        				var tahun = tgl.getFullYear(); 
                        				tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun; 
                        				document.write(tanggallengkap);
                      				</script>
                      			</span>
                              </h5>
                              </div>
</div>
</div>

<script src="<?=base_url();?>js/select2.min.js" cache="false"></script>

</div>
</body>
</html>