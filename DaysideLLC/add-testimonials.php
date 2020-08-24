<?php

//Turn on error reporting -- this is critical!
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

require('validate-add-testimonial.php');

if (!validForm()) {
    die("Please click back and try again");
}

//Connect to your database
require('/home/afternoo/db.php');

//header tab title
$title = "Add Testimonial";
require('header.php');

?>

    <div class="container testimonialsContainer">

        <?php
        //Get the form data and "escape" it
        //$number = mysqli_real_escape_string($cnxn, $_POST['Number']);
        $name = mysqli_real_escape_string($cnxn, $_POST['name']);
        $job = mysqli_real_escape_string($cnxn, $_POST['job']);
        $company = mysqli_real_escape_string($cnxn, $_POST['company']);
        $comment = mysqli_real_escape_string($cnxn, $_POST['comment']);
        $key = mysqli_real_escape_string($cnxn, $_POST['key']);
        //See if this is an update
        if ($_GET['action'] == 'edit') {

            $sql = "UPDATE Testimonials
                    SET Name = '$name', JobTitle = '$job', Company = '$company', Comment = '$comment'
                    WHERE KeyWord='$key'";
        } else {
            //Write an SQL statement
            $sql = "INSERT INTO Testimonials (Name, JobTitle,Company,Comment )
                    VALUES ('$name', '$job', '$company', '$comment')";
        }

        //Send the query to the database
        $result = mysqli_query($cnxn, $sql);

        //Print a confirmation
        if ($result) {
            echo "Testimonial inserted successfully!";
            echo '<a href=testimonials.php>View Testimonials</a>';
        }

        ?>
    </div>

<?php
require('footer.php');
?>