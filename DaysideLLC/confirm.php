<?php

require("/home/afternoo/db.php");

//header tab title
$title = "Thanks";
require('header.php');
?>

<pre class="m-5 p-5">
<?php
require("validInterest.php"); //server-side validation is required

// create a flag to track validation
$flag = true;

// initialize all variables
$fName = "";
$lName = "";
$phone = "";
$email = "";
$serviceList = null;
$consult = "";
$industry = null;
$howYouHearUs = null;

//validate first name
if (validName($_POST['fName'])) {
    $fName = $_POST['fName'];
} else {
    echo "<p>First Name is required.</p>";
    $flag = false;
}


//validate last name
if (validName($_POST['lName'])) {
    $lName = $_POST['lName'];
} else {
    echo "<p>Last name is required.</p>";
    $flag = false;
}

//validate email
if (validEmail($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo "<p>Correct email address required.</p>";
    $flag = false;
}

//validate phone number
if (validName($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    echo "<p>Phone number is required.</p>";
    $flag = false;
}

//validate service selection
if (!isset($_POST['serviceList'])) {

    // if services are valid
    if (validService($_POST['serviceList'])) {
        $serviceList = $_POST['serviceList'];
        $serviceListString = implode(", ", $serviceList);
    } else {
        echo "<p>Wrong service list selection.</p>";
        $flag = false;
    }
}

//validate consultation preference selection

if (isset($_POST['consult'])) {
    if (validConsult($_POST['consult'])) { //check if correct selection is selected
        $consult = $_POST['consult'];
    } else {
        echo "<p>Wrong consultation preference selected.</p>";
        $flag = false;
        die();
    }
}


//validate industry selection
if (!isset($_POST['industryList'])) {

    // if industries are valid
    if (validIndustry($_POST['industryList'])) {
        $industry = $_POST['industryList'];
        $industryString = implode(", ", $industry);
    } else {
        echo "<p>Wrong industry list selection.</p>";
        $flag = false;
    }
}

//validate hear about us
if (!isset($_POST['howYouHearUs'])) {

    // if industries are valid
    if (validHear($_POST['howYouHearUs'])) {
        $howYouHearUs = $_POST['howYouHearUs'];
        $howYouHearUsString = implode(", ", $howYouHearUs);
    } else {
        echo "<p>Wrong input for How did you hear about us</p>";
        $flag = false;
    }
}

if ($flag) { //validation passes then display confirmation and send emails
    // get the form data
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $orgName = $_POST['orgName'];
    $cityName = $_POST['cityName'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $comment = $_POST['comment'];
    $consult = $_POST['consult'];
    $industryList = $_POST['industryList'];
    $serviceList = $_POST['serviceList'];
    $howYouHearUs = $_POST['howYouHearUs'];
    $describeY = $_POST['describeY'];
    $crisis = $_POST['crisis'];
    $sql = "INSERT INTO longForm (firstName, lastName, email, phone, orgName, city, state, zip, comments, consult, industury, service, hear, describey, crisis)
            VALUES('$fName', '$lName','$email', '$phone', '$orgName', '$cityName',
            '$state','$zip','$comment','$consult','$industryList','$serviceList',
            '$howYouHearUs','$describeY','$crisis')";

    $result = mysqli_query($cnxn, $sql);

    // display the form data to client on confirm page
    echo "<h1 class='mt-5 pt-5'>Thank you for your submission, $fName $lName!</h1>";
    echo "<h2>Info Summary</h2>";
    echo "<p>Organization: $orgName</p>";
    echo "<p>Email address: $email</p>";
    echo "<p>Phone number: $phone</p>";
    echo "<p>Service you are interested in: $serviceList</p>";
    echo "<p>Consulting method you'd like: $consult</p>";
    echo "<p>Industry you are in:$industryList</p>";
    echo "<p>Crisis: $crisis</p>";

    // send email to client
    $fromAddress = "aaron@daysidellc.com";
    $toAddress = $email;
    $subject = "$fName $lName, You have submitted the form successfully!";
    $headers = "From: Aaron Day <$fromAddress>";
    $message = "$fName $lName, You have submitted the form successfully!\r\n";
    $message .= "Thank you for contacting Dayside LLC. Someone will contact you within 2 - 3 business days to learn more about how we may able to help assist your leadership and change management needs.\r\n";
    mail($toAddress, $subject, $message, $headers);

    // send email to Aaron
    $fromAddress = "$email";
    $toAddress = "aaron@daysidellc.com";
    $subject = "$fName $lName has submitted the form successfully!";
    $headers = "From: $fName $lName <$fromAddress>";
    $message = "$fName $lName has submitted his/her interest form!\r\n";
    $message .= "Organization: $orgName\r\n";
    $message .= "Email address: $email\r\n";
    $message .= "Phone number: $phone\r\n";
    $message .= "Address: $cityName, $state $zip\r\n";
    $message .= "His/Her is in the $industry industry\r\n";
    $message .= "He/She is interested in: $serviceList service\r\n";
    $message .= "Consulting preference: $consult\r\n";
    $message .= "He/She has heard your services from: $howYouHearUs\r\n";
    $message .= "Comment: $comment";
    mail($toAddress, $subject, $message, $headers);
}
?>
</pre>

<?php
require('footer.php');
?>
