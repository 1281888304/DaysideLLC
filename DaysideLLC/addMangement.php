<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

require("validMangement.php");

if (!validForm()) {
    die("Please click back and try again");

}

//Connect to your database
require('/home/afternoo/db.php');

//header tab title
$title = "Change Management";
require('header.php');
?>

    <div class="container testimonialsContainer">

        <?php
        $mangement = mysqli_real_escape_string($cnxn, $_POST['mangement']);
        $key = mysqli_real_escape_string($cnxn, $_POST['key']);
        //$key=$post['key'];

        if (isset($_GET['action'])) {
            $sql = "UPDATE ChangeManagement
                    SET Service='$mangement' 
                    WHERE KeyWord='$key'";
        } else {
            $sql = "INSERT INTO ChangeManagement (Service,KeyWord)
                    VALUES('$mangement','$key')";
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