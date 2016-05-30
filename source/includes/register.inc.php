<?php
include_once 'db_connect.php';
include_once 'db_config.php';
 
$error_msg = "";
 
if (isset($_POST['username'], $_POST['email'], $_POST['p'], $_POST['fname'], $_POST['lname'], $_POST['company'], $_POST['address1'], $_POST['address2'], $_POST['city'], $_POST['state'], $_POST['postcode'], $_POST['country'], $_POST['homenumber'], $_POST['mobilenumber'] )) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }
 
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$company = $_POST['company'];
	$a1 = $_POST['address1'];
	$a2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$country = $_POST['country'];
	$hn = $_POST['homenumber'];
	$mn = $_POST['mobilenumber'];
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
    $prep_stmt = "SELECT id FROM clients WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 1) {
                        $stmt->close();
        }
    } else {
                $stmt->close();
    }
 
    // check existing username
    $prep_stmt = "SELECT id FROM clients WHERE username = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
 
                if ($stmt->num_rows == 1) {
                        $stmt->close();
                }
        } else {
                $stmt->close();
        }
 
    if (empty($error_msg)) {

        $password = password_hash($password, PASSWORD_BCRYPT);
 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("INSERT INTO clients (username, email, password, fname, lname, company, address1, address2, city, state, postcode, country, homenumber, mobile, number, credit, active) VALUES (?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?)")) {
            $insert_stmt->bind_param('sss', $username, $email, $password, $fname, $lname, $company, $a1, $a2, $city, $state, $postcode, $country, $hn, $mn, "0.00", "true");
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../../failed.php?err=reg');
            }
        }
        header('Location: ../../success.php');
    }
}
?>