<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

// header tab title
$title = "Thank You";
require('header.php');
?>

<pre>
    <?php
    $sName = $_POST["sName"];
    $sEmail = trim($_POST["sEmail"]);
    $sPhone = $_POST['sPhone'];
    $sMail = $_POST['mailing'];
    $sMessage = $_POST['sComment'];

    require("validation.php");

    if (!validForm()) {
        die("Please click back and try again");

    }

    // display the form data to client on subscribe page
    echo "<h2>Thank you. Someone will get back in 3 business days.<br>If you have signed up for mailing list, you will receive fresh ideas and free advice on leadership, management, and organizational change. <br>You will receive quick and practical information delivered right to your inbox!</h2>";
    echo "<h2>Subscribe Summary:</h2>";
    echo "<br><br><p>Name: $sName </p>";
    echo "<p>Email: $sEmail</p>";
    echo "<p>Phone number: $sPhone</p>";
    echo "<p>If you'd like to tell us more about you, you can also fill out our interest form by clicking on this: <a href='https://afternooners.greenriverdev.com/DaysideLLC/interest-form.php'>Interest Form</a></p>";

    // send email to client
    $fromAddress = "aaron@daysidellc.com";
    $toAddress = "$sEmail";
    $subject = "$sName, You have submitted your info successfully!";
    $headers = "From: Aaron Day <$fromAddress>";
    $message = "$sName, You have submitted your info successfully!\r\n";
    if ($sMail == "mailing") {
        $message .= "You will receive emails about leadership and management tips, blog posts, articles, and other happenings in the field of organizational leadership.\r\n";
        $message .= "To unsubscribe from out mailing list, please directly reply \"unsubscribe\" to this email.\r\n";
    }
    $message .= "If you'd like to tell us more about you, you can also fill out our interest form by clicking on this: https://afternooners.greenriverdev.com/DaysideLLC/interest-form.php\r\n";
    mail($toAddress, $subject, $message, $headers);

    // send email to Aaron
    $fromAddress = "$sEmail";
    $toAddress = "aaron@daysidellc.com";
    $subject = "$sName has submitted the form successfully!";
    $headers = "From: $sName <$fromAddress>";
    $message = "$sName has submitted his/her contact info!\r\n";
    $message .= "Phone number: $sPhone\r\n";
    $message .= "Email Address: $sEmail\r\n";
    $message .= "Message: $sMessage\r\n";
    if ($sMail == "mailing") {
        $message .= "Also Wants to be added to the mailing list.\r\n";
    }

    mail($toAddress, $subject, $message, $headers);

    ?>
</pre>

<pre>
        <?php

        require('/home/afternoo/db.php');

        $name = mysqli_real_escape_string($cnxn, $_POST['sName']);
        $email = mysqli_real_escape_string($cnxn, $_POST['sEmail']);
        $phone = mysqli_real_escape_string($cnxn, $_POST['sPhone']);// need to new id and new form
        $sMail = $_POST['mailing'];

        if ($sMail == "mailing") {
            $sql = "INSERT INTO Contact
                    VALUES('$name', '$email','$phone','Yes')";
        } else {
            $sql = "INSERT INTO Contact
                    VALUES('$name', '$email','$phone','No')";
        }

        //send query to datebase
        $result = mysqli_query($cnxn, $sql);
        ?>
    </pre>

<?php
require('footer.php');
?>


