<?php 
// This is my fancy circle script!

error_reporting(-1);
ini_set('display_errors', 'On');

include('../includes/circle_functions.php');

echo '<script>';

echo '
var c1 = document.getElementById("circle1");
var ctx1 = c1.getContext("2d");
ctx1.beginPath();
ctx1.arc(101,100,99,0,2*Math.PI);
ctx1.textAlign="center"; 
ctx1.fillText("Hello World",101,100);
ctx1.stroke();';

echo '
var c2 = document.getElementById("circle2");
var ctx2 = c2.getContext("2d");
ctx2.beginPath();
ctx2.arc(101,100,99,0,2*Math.PI);
ctx2.textAlign="center"; 
ctx2.fillText("Hello World",101,100);
ctx2.stroke();';

echo '
var c3 = document.getElementById("circle3");
var ctx3 = c3.getContext("2d");
ctx3.beginPath();
ctx3.arc(101,100,99,0,2*Math.PI);
ctx3.textAlign="center"; 
ctx3.fillText("Hello World",101,100);
ctx3.stroke();';

echo '
var c4 = document.getElementById("circle4");
var ctx4 = c4.getContext("2d");
ctx4.beginPath();
ctx4.arc(101,100,99,0,2*Math.PI);
ctx4.textAlign="center"; 
ctx4.fillText("Hello World",101,100);
ctx4.stroke();';

echo '</script>';
?>