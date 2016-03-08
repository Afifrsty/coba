$(document).ready(function() {      


$('#name').focus(function(){
  $(this).addClass('filled');
     });

$('#name').blur(function(){
if($('#name').val().length == 0)
  $(this).removeClass('filled');
     });

$('#email').focus(function(){
  $(this).addClass('filled');
     });

$('#message').focus(function(){
  $(this).addClass('filled');
     });

     $('.dc-menu-trigger').click(function(){
        $('nav').toggleClass( "dc-menu-open" );
        $('.menu-overlay').toggleClass( "open" );
        $('header').toggleClass( "shownav" );
     });

     $('#profil').mouseover(function(){
     	$(this).addClass("circle1");
     	$(this).addClass("animate2 tada");
     	$(this).removeClass("circle");
     });

     $('#profil').mouseout(function(){
     	$(this).addClass("circle");
     	$(this).removeClass("circle1");
     	$(this).removeClass("animate2 tada");
     });

     $('#lihat').mouseover(function(){
     	$(this).addClass("menuhome-hover");
     	$('.lihat').addClass("lihat-hover");
     	$('.gambar-file').addClass("gambar-file-hover animate1 flip");
     });

     $('#mobil').mouseover(function(){
        $(this).addClass("menuhome-hover");
        $('.mobil').addClass("mobil-hover");
        $('.gambar-mobil').addClass("gambar-mobil-hover animate1 flip");
     });

     $('#mobil').mouseout(function(){
        $(this).removeClass("menuhome-hover");
        $('.mobil').removeClass("mobil-hover");
        $('.gambar-mobil').removeClass("gambar-mobil-hover animate1 flip");
     });

     $('#motor').mouseover(function(){
        $(this).addClass("menuhome1-hover");
        $('.motor').addClass("motor-hover");
        $('.gambar-motor').addClass("gambar-motor-hover animate1 flip");
     });

     $('#motor').mouseout(function(){
        $(this).removeClass("menuhome1-hover");
        $('.motor').removeClass("motor-hover");
        $('.gambar-motor').removeClass("gambar-motor-hover animate1 flip");
     });

     $('#lihat').mouseout(function(){
     	$(this).removeClass("menuhome-hover");
     	$('.lihat').removeClass("lihat-hover");
     	$('.gambar-file').removeClass("gambar-file-hover animate1 flip");
     });

     $('#tambah').mouseover(function(){
     	$(this).addClass("menuhome1-hover");
     	$('.tambah').addClass("tambah-hover");
     	$('.gambar-tambah').addClass("gambar-tambah-hover animate1 flip");
     });

     $('#tambah').mouseout(function(){
     	$(this).removeClass("menuhome1-hover");
     	$('.tambah').removeClass("tambah-hover");
     	$('.gambar-tambah').removeClass("gambar-tambah-hover animate1 flip");
     });

     $('.kotak-dalam').mouseover(function(){
     	$(this).addClass("kotak-dalam-hover");
     	$('.jam').addClass("jam-hover animate1 wobble");
     	$('.hari').addClass("hari-hover");
     });

     $('.kotak-dalam').mouseout(function(){
     	$(this).removeClass("kotak-dalam-hover");
     	$('.jam').removeClass("jam-hover animate1 wobble");
     	$('.jam').addClass("animate1 swing");
     	$('.hari').removeClass("hari-hover");
     });

     $('#mob').mouseover(function(){
        $(this).addClass("animate1 flip");
     });

     $('#mob').mouseout(function(){
        $(this).removeClass("animate1 flip");
     });

     $('#mot').mouseover(function(){
        $(this).addClass("animate1 flip");
     });

    $('#mot').mouseout(function(){
        $(this).removeClass("animate1 flip");
     });

  });