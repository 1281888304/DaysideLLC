<?php
// Turn on error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Connect to db
require('/home/afternoo/db.php');

//header tab title
$title = "Edit Bio";
require('header.php');
?>

<div class="container testimonialsContainer">
    <h1>Bio:</h1>
    <table class="datatable">
        <thead>
        <tr>
            <th>Bio</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM Bio";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);

        //Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $bio = $row['bio'];

            echo "<tr>
                    <td><a href='NewBio.php?bio=$bio'>$bio</a></td>
                  </tr>";
        }
        ?>
    </table>

</div>

<div class="container testimonialsContainer">
    <br><br>
    <h1>Accomplishments:</h1>
    <table class="datatable">
        <thead>
        <tr>
            <th>Number</th>
            <th>Accomplishments</th>
        </tr>
        </thead>
        <?php
        //Define a query
        $sql = "SELECT * FROM Accomplishments";

        //Send the query to the db
        $result = mysqli_query($cnxn, $sql);

        //Process the result
        foreach ($result as $row) {

            $id = $row['id'];
            $accomplishment = $row['accomplishment'];
            $key = $row['KeyWord'];
            echo "<tr>
                    <td>$key</td>
                    <td><a href='new-bio.php?id=$id'>$accomplishment</a></td>
                  </tr>";
        }
        ?>
    </table>
    <a href="new-bio.php">Add an Accomplishment</a>
</div>

<?php
require('footer.php');
?>