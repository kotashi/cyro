<?php
$error = $_GET['err'];
$msg = "";
switch ($error) {
	case "la":
		$msg = "Error installing LA tables.";
		break;
	case "mem":
		$msg = "Error installing member tables.";
		break;
	case "srv":
		$msg = "Error installing service tables.";
		break;
	case "ad":
		$msg = "Error installing admin tables.";
		break;
	case "create":
		$msg = "Failed to add the admin account to the database. Do you have the correct database config file from step 1?";
		break;
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
        <h1>Something went wrong...</h1>
      </div>
      <p class="lead">It appears that something went wrong. This is what I know:</p>
	  <?php echo '<p><i>' . $msg . '</i></p>';?>
	  <p>Consult the Wiki for more info on this error. You can try to install again, but if it doesn't work, then follow the manual instructions in the README.TXT file.</p>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">Kotashi Cyro - <a href="http://github.com/kotashi/cyro">http://github.com/kotashi/cyro</a></p>
      </div>
    </footer>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>