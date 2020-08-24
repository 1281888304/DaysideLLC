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
$title = "Add Bio";
require('header.php');
?>


    <div class="container testimonialsContainer">

        <?php
        $accomplishment = mysqli_real_escape_string($cnxn, $_POST['accomplishment']);
        $key = mysqli_real_escape_string($cnxn, $_POST['key']);
        //$key=$post['key'];

        if (isset($_GET['action'])) {
            $sql = "UPDATE Accomplishments
                SET accomplishment='$accomplishment' 
                WHERE KeyWord='$key'";

        } else {
            $sql = "INSERT INTO Accomplishments (accomplishment,KeyWord)
                    VALUES('$accomplishment','$key')";
        }

        //send query to datebase
        $result = mysqli_query($cnxn, $sql);

        if ($result) {
            echo "Accomplishment inserted successfully!";
        }

        ?>
    </div>

<?php
require('footer.php');
?>