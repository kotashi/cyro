<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();
 
if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.
 
    if (login($email, $password, $mysqli) == true) {
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php?error=fail');
    }
} else {
    echo 'Invalid Request';
}