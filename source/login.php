<?php
include('includes/cyro.log.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico">
    <title>Kotashi Cyro - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/password.js"></script>
</head>

<body>

<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div> 
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="includes/login_proc.php" name="login_form" role="login">
          <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		  <div>Please login to view your account and manage services.</div>
          <input type="email" id="email" placeholder="Email Address" required class="form-control input-lg" />
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
               
         
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="formhash(this.form, this.form.password);">Login</button>
          <div>
            New? <a href="register.php">Create account</a> or <a href="forgot.php">reset your password if you can't remember it.</a>
          </div>       
        </form>
      </section>  
      </div>  
</div>
</body>
</html>
