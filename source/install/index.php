<?php
// Cyro install script :)
include_once("./includes/db_config.php");
include_once("./includes/db_connect.php");

// Intsall variables.
$connected = false; // false by default.

$sql_members = "CREATE TABLE `".$DBNAME."`.`clients` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` CHAR(128) NOT NULL,
	`firstname` VARCHAR(50) NOT NULL,
	`lastname` VARCHAR(50) NOT NULL,
	`company` VARCHAR(100) NOT NULL,
	`address1` VARCHAR(100) NOT NULL,
	`address2` VARCHAR(100) NOT NULL,
	`city` VARCHAR(50) NOT NULL,
	`state` VARCHAR(50) NOT NULL,
	`postcode` VARCHAR(10) NOT NULL,
	`homenumber` VARCHAR(20) NOT NULL,
	`mobilenumber` VARCHAR(20) NOT NULL,
	`defaultpayment` VARCHAR(100) NOT NULL,
	`credit` VARCHAR(10) NOT NULL,
	`active` VARCHAR(10) NOT NULL
) ENGINE = InnoDB;";

$sql_la = "CREATE TABLE `".$DBNAME."`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB";

$sql_services = "CREATE TABLE `".$DBNAME."`.`services` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`owner_email` VARCHAR(100) NOT NULL,
	`package` VARCHAR(50) NOT NULL,
	`cost` VARCHAR(10) NOT NULL,
	`billingcycle` VARCHAR(25) NOT NULL,
	`status` VARCHAR(15) NOT NULL
) ENGINE = InnoDB;";

// check that I can connect to the database.
if ($mysqli>connect_error) {
    $connected = false;
} else {
	$connected = true;
}
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
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Install Kotashi Cyro</h1>
      </div>
      <p class="lead">Thank you for choosing Kotashi Cyro. Hopefully you will be able to install it without any issues. Just follow what the installer tells you to do.</p>
	  
	  <?php 
	  if ($connected == true)
	  {
		// I connected to the database.
		echo '
		
		<p style="color:green;">Connected to database successfully!</p>
		
		
		';
	  }
	  else
	  { 
		// Oh dear.
		echo '
		
		<p style="color:red;">Error connecting to database. Check your config!!!</p>
		
		<p>I can\'t connect to your database. Please locate the file <b>/includes/db_config.php</b> and fill out the following fields as shown.</p>
		<ul>
		<li>DB_HOST : Your database host, likely <i>localhost</i>.</li>
		<li>DB_USER : Your database user.</li>
		<li>DB_PASSWORD : The user\'s password.</li>
		<li>DB_NAME : The database name.</li>
		</ul>
		
		<p>Once you have done this, click the button below.</p>
		
		<a class="btn btn-primary" href="index.php">Try again</a>
		
		';
	  }
	  
	  ?>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>