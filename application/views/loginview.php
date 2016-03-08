<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Parkir</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/parkir/css/login.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/parkir/css/animate.delay.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/parkir/css/animate.min.css">
  <script type="text/javascript" src="http://localhost/parkir/js/jquery-1.4.2.js"></script>
  <script type="text/javascript" src="http://localhost/parkir/js/login.js"></script>
</head>
<body>
<form method="POST" action="http://localhost/parkir/signin">
<div class="canvas animate2 flip">
<h1 class="animate6 rollIn">Aplikasi Parkir</h1>
  <div id="user" class="form__field animate7 swing">
    <input type="text" id="username" name="username" />
    <label for="username">Username</label>
  </div>
  <div id="pass" class="form__field animate8 swing">
    <input type="password" id="password" name="password" />
    <label for="password">Password</label>
  </div>
    <button class="btn animate9 rotateIn" type="submit">Masuk</button>
  </div>
</form>

<?php 
  if($this->session->flashdata('msg') != ''){
    echo '
          <div class="validasi-login animate10 bounceIn"><button type="button" class="close animate13 bounceIn" data-dismiss="alert">&times;</button>'.$this->session->flashdata('msg').'</div>
        ';
  }
  
  if($this->session->flashdata('success') != ''){
    echo '
          <div class="validasi-login1 animate10 bounceIn"><button type="button" class="close animate13 bounceIn" data-dismiss="alert">&times;</button>'.$this->session->flashdata('success').'</div>
        ';
  }    
?>

</body>
</html>