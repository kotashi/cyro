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

function s_listServices()
{
	echo '<tr>';
	echo '<td>123</td>';
	echo '<td>Kotashi Basic</td>';
	echo '<td>Tomorrow</td>';
	echo '<td>£2.75</td>';
	echo '<td><a href="view_service.php" class="btn btn-default">View</a></td>';
	echo '</tr>';
}
?>