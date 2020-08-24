<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

require("bio-validation.php");

if (!validForm()) {
    die("Please click back and try again");
}

//Connect to your database
require('/home/afternoo/db.php');

//header tab title
$title = "Add Service";
require('header.php');
?>


<div class="container testimonialsContainer">

    <?php
    $service = mysqli_real_escape_string($cnxn, $_POST['service']);
    $key = mysqli_real_escape_string($cnxn, $_POST['key']);

    if (isset($_GET['action'])) {
        $sql = "UPDATE LeadershipDevelopment
                SET Service='$service' 
                WHERE KeyWord='$key'";
    } else {
        $sql = "INSERT INTO LeadershipDevelopment (Service,KeyWord)
                VALUES('$service','$key')";
    }

    //send query to datebase
    $result = mysqli_query($cnxn, $sql);

    if ($result) {
        echo "Service inserted successfully!";
    }
    ?>
</div>

<?php
require('footer.php');
?>
