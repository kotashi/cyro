<?php
///error_reporting(-1);
///ini_set('display_errors', 'On');

include('includes/functions.php');
include('includes/circle_functions.php');
include('includes/service_functions.php');
include('includes/cyro.log.php');

if (file_exists("install"))
{
	die("Please install Kotashi Cyro and delete the install directory first!");
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Cyro Client Area">
    <meta name="author" content="Kotashi Hosting">
    <link rel="icon" href="images/favicon.ico">
    <title>Kotashi Cyro - Client Area</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	<link href="css/install.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
	<?php if(login_check($mysqli) == true) : ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kotashi Cyro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input class="form-control" placeholder="Search..." type="text">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<li><b style="margin-left:15px">General</b></li><br>
            <li class="active"><a href="index.php">Account Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="wallet.php">Wallet</a></li>
            <li><a href="settings.php">Settings</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			<li><b style="margin-left:15px">Quick Links</b></li><br>
            <li><a href="kb.php">Knowledge Base</a></li>
            <li><a href="downloads.php">Downloads</a></li>
            <li><a href="faq.php">FAQ</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			<li><b style="margin-left:15px">Support</b></li><br>
            <li><a href="new_ticket.php">Open New Ticket</a></li>
            <li><a href="tickets.php">View Tickets</a></li>
            <li><a href="live.php">Request Live Support</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Welcome back, <?php echo getUser($mysqli);?>!</h1>

		 
		  
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
				<canvas id="circle1" width="201" height="201"></canvas> 
              <h4>Your Available Credit</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <canvas id="circle2" width="201" height="201"></canvas> 
              <h4>Services Registered</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <canvas id="circle3" width="201" height="201"></canvas> 
              <h4>Support Tickets</h4>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
             <canvas id="circle4" width="201" height="201"></canvas> 
              <h4>Times Logged In</h4>
            </div>
          </div>

          <h2 class="sub-header">Brief Service Overview</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Package</th>
                  <th>Date Due</th>
                  <th>Amount Due</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
				<?php echo s_listServices();?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
     <footer class="footer">
      <div class="container">
        <p class="text-muted">Kotashi Cyro - <a href="http://github.com/kotashi/cyro">http://github.com/kotashi/cyro</a></p>
      </div>
    </footer>
	</div>
	
	<?php else : ?>
	<?php header("Location: login.php");?>
    <?php endif; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  
	 <!-- My fancy circle script! Lovely example used from W3 schools :3 -->
			<script>
				var c1 = document.getElementById("circle1");
				var ctx1 = c1.getContext("2d");
				ctx1.beginPath();
				ctx1.arc(101,100,99,0,2*Math.PI);
				ctx1.textAlign="center"; 
				ctx1.textBaseline="middle";
				ctx1.font="30px Verdana";
				ctx1.fillText("<?php echo '£' . c_getWallet();?>",101,100);
				ctx1.stroke();
				
				var c2 = document.getElementById("circle2");
				var ctx2 = c2.getContext("2d");
				ctx2.beginPath();
				ctx2.arc(101,100,99,0,2*Math.PI);
				ctx2.textAlign="center";
				ctx2.textBaseline="middle";
				ctx2.font="30px Verdana";				
				ctx2.fillText("<?php echo c_getServices();?>",101,100);
				ctx2.stroke();
				
				var c3 = document.getElementById("circle3");
				var ctx3 = c3.getContext("2d");
				ctx3.beginPath();
				ctx3.arc(101,100,99,0,2*Math.PI);
				ctx3.textAlign="center"; 
				ctx3.textBaseline="middle";
				ctx3.font="30px Verdana";
				ctx3.fillText("<?php echo c_getTickets();?>",101,100);
				ctx3.stroke();
				
				var c4 = document.getElementById("circle4");
				var ctx4 = c4.getContext("2d");
				ctx4.beginPath();
				ctx4.arc(101,100,99,0,2*Math.PI);
				ctx4.textAlign="center"; 
				ctx4.textBaseline="middle";
				ctx4.font="30px Verdana";
				ctx4.fillText("<?php echo c_getLogged();?>",101,100);
				ctx4.stroke();
			</script>

</body></html>