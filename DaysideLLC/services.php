<?php
// Turn on error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

// Connect to db
require('/home/afternoo/db.php');

// header tab title
$title = "Services";
require('header.php');
?>

<div class="container testimonialsContainer">
    <h1>Leadership Development:</h1>
    <table id="leadershipDevelopment" class="datatable">
        <thead>
        <tr>
            <th>Number</th>
            <th>Leadership Development</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM LeadershipDevelopment";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $id = $row['id'];
            $service = $row['Service'];

            echo "<tr>
                    <td>$id</td>
                    <td><a href='newService.php?id=$id'>$service</a></td>
                  </tr>";
        }
        ?>
    </table>
    <a href="newService.php">Add a new Leadership Development</a>
</div>

<div class="container">
    <h1>Change Management:</h1>
    <table id="changeManagement" class="datatable">
        <thead>
        <tr>
            <th>Number</th>
            <th>Change Management</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM ChangeManagement";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $id = $row['id'];
            $mangement = $row['Service'];

            echo "<tr>
                    <td>$id</td>
                    <td><a href='newMangement.php?id=$id'>$mangement</td>
                  </tr>";
        }
        ?>
    </table>
    <a href="newMangement.php">Add a new Change Mangement</a>
</div>

<?php
require('footer.php');
?>