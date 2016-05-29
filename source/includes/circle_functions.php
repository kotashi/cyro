<?php
include_once('db_connect.php');
include_once('functions.php');
$connected = false;
/*if ($mysqli>connect_error) {
    $connected = false;
	//die ("Could not connect to the MySQL database!!! Please check if the service is running!");
} else {
	$connected = true; // continue
}*/

$sql_circle1 = "SELECT username, credit FROM clients WHERE username='".getUser($mysqli)."'";



DEFINE("wallet", $sql_res1);
DEFINE("services", $sql_res2);
DEFINE("tickets", $sql_res3);
DEFINE("logged", $sql_res4);
?>