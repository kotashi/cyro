<?php
include_once('db_connect.php');
include_once('functions.php');
$connected = false;
if ($mysqli>connect_error) {
    $connected = false;
	//die ("Could not connect to the MySQL database!!! Please check if the service is running!");
} else {
	$connected = true; // continue
}

$sql_circle1 = "SELECT username, credit FROM clients WHERE username='".getUser($mysqli)."'";

function c_getWallet()
{
	return "9.44";
}

function c_getServices()
{
	return "3";
}

function c_getTickets() 
{
	return "5";
}

function c_getLogged() 
{
	return "125";
}
?>