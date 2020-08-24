<?php
// Turn on error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Connect to db
require('/home/afternoo/db.php');

// header tab title
$title = "Interest Form Summary";
require('header.php');
?>

<div class="container-fluid pl-3 pr-3 mt-5 pt-5">
    <h1 class="mt-5 pt-5">Interest Form:</h1>
    <table class="datatable">
        <thead>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Organization</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Comments</th>
            <th>Consult</th>
            <th>Industry</th>
            <th>Service</th>
            <th>HearWay</th>
            <th>Describe</th>
            <th>Crisis</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM longForm ";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $phone = $row['phone'];
            $orgName = $row['orgName'];
            $city = $row['city'];
            $state = $row['state'];
            $zip = $row['zip'];
            $comments = $row['comments'];
            $consult = $row['consult'];
            $industry = $row['industry'];
            $service = $row['service'];
            $hear = $row['hear'];
            $describey = $row['describey'];
            $crisis = $row['crisis'];

            echo "<tr>
                    <td>$firstName</td>
                    <td>$lastName</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td>$orgName</td>
                    <td>$city</td>
                    <td>$state</td>
                    <td>$zip</td>
                    <td>$comments</td>
                    <td>$consult</td>
                    <td>$industry</td>
                    <td>$service</td>
                    <td>$hear</td>
                    <td>$describey</td>
                    <td>$crisis</td>
                  </tr>";
        }
        ?>
    </table>
</div>

<div class="fixed-bottom position-relative">
<?php
require('footer.php');
?>
</div>