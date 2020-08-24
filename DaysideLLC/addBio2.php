<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

require("bioValidation.php");

if (!validForm()) {
    die("Please click back and try again");
}

//connect to datebase
require("/home/afternoo/db.php");


$bio = mysqli_real_escape_string($cnxn, $_POST['bio']);
//$key=$post['key'];

if (isset($_GET['action'])) {
    $sql = "UPDATE Bio
            SET bio='$bio'
            ";
} else {
    $sql = "INSERT INTO Bio 
            VALUES('$bio')";
}

//send query to datebase
$result = mysqli_query($cnxn, $sql);

if ($result) {
    echo "Bio inserted successfully!";
}
