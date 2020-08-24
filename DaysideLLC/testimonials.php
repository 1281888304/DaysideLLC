<?php
// Turn on error reporting
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Connect to db
require('/home/afternoo/db.php');

// header tab title
$title = "Testimonials";
require('header.php');
?>

    <div class="container testimonialsContainer">

        <h1>Testimonials:</h1>
        <table class="datatable">
            <thead>
            <tr>
                <th>Name</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Comment</th>
            </tr>
            </thead>
            <?php
            //Define a query
            $sql = "SELECT * FROM Testimonials";

            //Send the query to the db
            $result = mysqli_query($cnxn, $sql);
            //var_dump($result);

            //Process the result
            foreach ($result as $row) {
                //var_dump($row);
                $number = $row['Number'];
                $name = $row['Name'];
                $job = $row['JobTitle'];
                $company = $row['Company'];
                $comment = $row['Comment'];

                echo "<tr>
                    <td>$name</td>
                    <td>$job</td>
                    <td>$company</td>
                    <td><a href='new-testimonials.php?Number=$number'>$comment</td>
                  </tr>";
            }
            ?>
        </table>
        <a href="new-testimonials.php">Add a Testimonial</a>
    </div>


<?php
require('footer.php');
?>