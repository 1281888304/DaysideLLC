<?php
//Turn on error reporting -- this is critical!
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

// Connect to db
require('/home/afternoo/db.php');

$action = "add";
$name = $job = $company = $comment = $key = "";
if (!empty($_GET['Number'])) {

    // Get the Number
    $name = $_GET['Number'];

    // Set a flag
    $action = "edit";

    // Query the database
    $name = mysqli_real_escape_string($cnxn, $name);
    $sql = "SELECT * FROM Testimonials WHERE Number = '$name'";
    echo $sql;
    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    $row = mysqli_fetch_array($result);
    //var_dump($row);

    // Get the data from the row
    $number = $row['Number'];
    $name = $row['Name'];
    $job = $row['JobTitle'];
    $company = $row['Company'];
    $comment = $row['Comment'];
    $key = $row['KeyWord'];
}

// header tab title
$title = "Add Testimonial";
require('header.php');
?>

<div class="container testimonialsContainer">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";

    echo "<h3>$text Testimonials</h3>";

    $url = "add-testimonials.php";
    if ($action = 'edit') {
        $url .= '?action=edit';
    }
    ?>

    <form id="datatable" action="<?php echo $url ?>" method="post">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>">
        </div>
        <div class="form-group">
            <label for="job">JobTitle</label>
            <input type="text" class="form-control" id="job" name="job" value="<?php echo $job ?>">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company" value="<?php echo $company ?>">
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <input type="text" class="form-control" id="comment" name="comment" value="<?php echo $comment ?>">
        </div>
        <div class="form-group">
            <label for="key">Key Word</label>
            <input type="text" class="form-control" id="key" name="key" value="<?php echo $key ?>">
        </div>
        <button id="submit" type="submit" class="btn btn-primary">
            <?php
            echo $action == 'add' ? 'Submit' : 'Save Changes';
            ?>
        </button>
    </form><br>
    <a href="testimonials.php">View Testimonials</a>
</div>

<?php
require('footer.php');
?>
