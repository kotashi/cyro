<?php
// Cyro install script :)
include_once("admin_create.php");
include_once("../includes/functions.php");

error_reporting(-1);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/favicon.ico">
    <title>Install Kotashi Cyro</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/install.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/forms.js"></script>
	<script src="js/sha512.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Create Admin Account</h1>
      </div>
      <p class="lead">Great! The databases installed perfectly. Now it's time to set up the admin account.</p>
			
		<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
            Username
			<input class="form-control" type='text' name='username' id='username' placeholder="Admin" required autofocus /><br>
            Email Address
			<input class="form-control" type="email" name="email" id="email" placeholder="admin@mydomain.com" required /><br>
            Password
			<input class="form-control" type="password" name="password" id="password" required /><br>
            Confirm Password
			<input class="form-control" type="password" name="confirmpwd" id="confirmpwd" required /><br>
            <input type="button" class="btn btn-success" value="Create Account" onclick="return regformhash(this.form,
															   this.form.username,
															   this.form.email,
															   this.form.password,
															   this.form.confirmpwd);" /> 
        </form>
			
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Kotashi Cyro - <a href="http://github.com/kotashi/cyro">http://github.com/kotashi/cyro</a></p>
      </div>
    </footer>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>