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
</head>

<body>

<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div> 
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="includes/forgot_submit.php" name="login_form" role="login">
          <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		  <div>Enter your email address to get a password reset.</div>
          <input type="email" id="email" placeholder="Email Address" required class="form-control input-lg" />
         
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" >Reset Password</button>  

			<div>
            <a href="login.php">Login</a> or <a href="register.php">Register</a>
			</div>     		  
        </form>
      </section>  
      </div>  
</div>
</body>
</html>
