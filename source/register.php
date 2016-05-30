<?php

include('includes/cyro.log.php');
include('includes/functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico">
    <title>Kotashi Cyro - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
	<script src="js/forms.js"></script>
	<script src="js/sha512.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/password.js"></script>
</head>

<body>

<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div> 
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" name="registration_form" role="login">
          <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
		  <div>You can register an account below! You will need one to order services from us. A <b>*</b> denotes an optional field.</div>
		  <input type="text" id="fname" placeholder="First Name" required class="form-control input-lg" />
		  <input type="text" id="lname" placeholder="Last Name" required class="form-control input-lg" />
		  <input type="text" id="company" placeholder="Company *" class="form-control input-lg" />
		  <input type="text" id="address1" placeholder="Address Line 1" required class="form-control input-lg" />
		  <input type="text" id="address2" placeholder="Address Line 2" required class="form-control input-lg" />
		  <input type="text" id="city" placeholder="City" required class="form-control input-lg" />
		  <input type="text" id="state" placeholder="State" required class="form-control input-lg" />
		  <input type="text" id="postcode" placeholder="Postcode" required class="form-control input-lg" />
		  <input type="text" id="country" placeholder="Country" required class="form-control input-lg" />
		  <input type="text" id="homenumber" placeholder="Home Phone *" class="form-control input-lg" />
		  <input type="text" id="mobilenumber" placeholder="Mobile Phone *" class="form-control input-lg" />
		  <hr>
		  <input type="text" id="username" placeholder="Username" required class="form-control input-lg" />
          <input type="email" id="email" placeholder="Email Address" required class="form-control input-lg" />
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required />
		  <input type="password" class="form-control input-lg" id="confirmpwd" placeholder="Confirm Password" required />
               
         
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd,
								   this.form.fname,
								   this.form.lname,
								   this.form.company,
								   this.form.address1,
								   this.form.address2,
								   this.form.city,
								   this.form.state,
								   this.form.postcode,
								   this.form.country,
								   this.form.homenumber,
								   this.form.mobilenumber);">Register</button>
          <div>
            Already registered? <a href="login.php">Login</a> or <a href="forgot.php">reset your password if you can't remember it.</a>
          </div>       
        </form>
      </section>  
      </div>  
</div>
</body>
</html>
