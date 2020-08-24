<?php
//turn on air reporting
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

require('check-login.php');

//connect to database
require('/home/afternoo/db.php');

// header tab title
$title = "Send Emails";
require('header.php');
?>

<div class="container mt-5 pt-5">
    <?php
    //get data from database
    $sql = "SELECT Email FROM Contact WHERE AddMailingList='Yes'";

    //runs $sql line with my database
    $result = mysqli_query($cnxn, $sql);

    //send email once only
    $array = array();
    foreach ($result as $row) {
        $theWord = strtolower($row['Email']);

        if (!in_array($theWord, $array)) {
            $array[] = $theWord;
        }
    }

    //convert array to strings
    $arrayString = implode(", ", $array);

    // create a flag to track validation
    $isValid = true;

    // initialize all variables
    $emailSubject = $_POST['emailSubject'];
    $emailMessage = $_POST['emailMessage'];

    //Subject and message validation
    if (!empty($_POST['emailSubject'])) {
        $emailSubject = trim($emailSubject);
    } else {
        echo "<p class='mt-5 pt-5'>Subject is required.</p>";
        $isValid = false;
    }

    if (!empty($_POST['emailMessage'])) {
        $emailMessage = trim($emailMessage);
    } else {
        echo "<p>Message is required.</p>";
        $isValid = false;
    }

    if ($isValid) {
        // display if sent
        echo "<h1 class='mt-5 pt-5'>Email sent successfully!</h1>";


        $emailSubject = $_POST['emailSubject'];
        $emailMessage = $_POST['emailMessage'];

        // send email to all contacts
        $fromAddress = "aaron@daysidellc.com";
        $toAddress = $arrayString;
        $subject = $emailSubject;
        $headers = "From: Aaron Day <$fromAddress>";
        $message = $emailMessage;

        echo "<h3>Summary:</h3>";
        echo "<p>Recipients: $toAddress </p>";
        echo "<p>Subject: $subject</p>";
        echo "<p>Message: $message</p>";

        foreach ($array as $allEmails) {
            mail($allEmails, $subject, $message, $headers);
        }
    }
    ?>
</div>

<div class="fixed-bottom position-fixed">
    <?php
    require('footer.php');
    ?>
</div>

