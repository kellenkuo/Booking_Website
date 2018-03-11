<?php session_start(); ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <form method ="post" action ="CheckPassword.php" >
      <div class="input-container">
        <input type="text" name="username" />
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" />
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer">
      <?php
        if ( isset($_SESSION['login_message'])) {
          echo 'Wrong Username or Password';
        }
      ?>
      </div>
    </form>

  </div>
  <div class="card alt">
    
  </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<script src="js/index.js"></script>
  </body>
</html>
