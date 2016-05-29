<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/favicon.ico">
    <title>Install Kotashi Cyro</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/install.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">
        <h1>Create Admin Account</h1>
      </div>
      <p class="lead">Yay! Kotashi Cyro installed successfully. Here are your details:
	  <ul>
	  <li>Admin Username: <?php echo $_GET['usr'];?></li>
	  <li>Admin Password: <i>You just set it!</i></li>
	  <li>Client Area: <a href="../index.php">Here</a>.</li>
	  <li>Admin Area: <a href="../admin/index.php">Here</a>.</li>
	  </ul>
	  
	  <p>I hope it was quick and easy to install Kotashi Cyro! If you had any issues, please let me know!</p>
	  
	  <a href="../admin" class="btn btn-default">Go to Admin</a>
	  
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Kotashi Cyro - <a href="http://github.com/kotashi/cyro">http://github.com/kotashi/cyro</a></p>
      </div>
    </footer>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>