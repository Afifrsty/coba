  $(document).ready(function() {  

  $('#username').focus(function(){
    $(this).addClass('filled');
    $('#user').addClass('animate2 wiggle');
       });

  $('#password').focus(function(){
    $(this).addClass('filled');
    $('#pass').addClass('animate2 wiggle');
       });
  $('#username').blur(function(){
  if($('#username').val().length == 0)
  	$('#username').removeClass('filled');
  	});

  $('#password').blur(function(){
  if($('#password').val().length == 0)
  	$('#password').removeClass('filled');
  	});

  $('.close').click(function(){
    $('.validasi-login').addClass('animate1 hinge');
    $('.validasi-login1').addClass('animate0 hinge');
    });

});


