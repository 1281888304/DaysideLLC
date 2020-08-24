<?php
// Turn on error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

// Connect to db
require('/home/afternoo/db.php');

// header tab title
$title = "Contacts";
require('header.php');
?>

<div class="container mt-5 pt-5">

    <h1 class="mt-5 pt-3 pb-3 text-center">Customer List:</h1>
    <table class="datatable">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>AddMailingList</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM Contact";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {

            $name = $row['Name'];
            $email = $row['Email'];
            $phone = $row['PhoneNumber'];
            $mail = $row['AddMailingList'];
            echo "<tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$mail</td>
                  </tr>";
        }
        ?>
    </table>
    <a href="viewLongForm.php" class="btn btn-secondary mt-5">View Interest Form Summary</a>
</div>

<div class="container mt-5 pt-5">
    <h1 class="mt-5 text-center">Send Emails</h1>
    <form action="sendEmail.php" method="post">
        <div class="form-group">
            <label for="emailSubject">Subject</label>
            <input type="text" class="form-control" id="emailSubject" name="emailSubject">
        </div>
        <div class="form-group">
            <label for="emailMessage">Message</label>
            <textarea class="form-control" id="emailMessage" rows="3" name="emailMessage"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<?php
require('footer.php');
?>