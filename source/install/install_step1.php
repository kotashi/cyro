<?php
// NO HTML CONTENT

//error_reporting(-1);
//ini_set('display_errors', 'On');

include_once("../includes/db_config.php");
include_once("../includes/db_connect.php");

$sql_members = "CREATE TABLE `".DB_NAME."`.`clients` (
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

$sql_admins = "CREATE TABLE `".DB_NAME."`.`admins` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` CHAR(128) NOT NULL,
	`active` VARCHAR(10) NOT NULL
) ENGINE = InnoDB;";

$sql_la = "CREATE TABLE `".DB_NAME."`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB";

$sql_services = "CREATE TABLE `".DB_NAME."`.`services` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`owner_email` VARCHAR(100) NOT NULL,
	`package` VARCHAR(50) NOT NULL,
	`cost` VARCHAR(10) NOT NULL,
	`billingcycle` VARCHAR(25) NOT NULL,
	`status` VARCHAR(15) NOT NULL
) ENGINE = InnoDB;";

if ($mysqli->query($sql_members) === TRUE) {
    // Member install done.
		if ($mysqli->query($sql_services) === TRUE) {
			// Services install done.
				if ($mysqli->query($sql_la) === TRUE) {
					// LA tables installed.
						if ($mysqli->query($sql_admins) === TRUE) {
							// Admin tables installed.
								header("Location: step2.php");
						} else {
							die("Location: failed.php?err=ad");
						}
				} else {
					die("Location: failed.php?err=la");
				}
		} else {
			die("Location: failed.php?err=srv");
		}
} else {
     die("Location: failed.php?err=mem");
}
?>