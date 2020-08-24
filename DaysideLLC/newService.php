<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

//connect datebase
require('/home/afternoo/db.php');

$action = "add";
$service = $key = "";

//see if this an edit
if (!empty($_GET['id'])) {
    //get the sid
    $service = $_GET['id'];
    //echo $sid;

    //set a flag
    $action = "edit";

    //Query the database
    $service = mysqli_real_escape_string($cnxn, $service);
    $sql = "SELECT * FROM LeadershipDevelopment where id ='$service'";
    //echo $sql;

    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $service = $row['Service'];
    $key = $row['KeyWord'];
}

// header tab title
$title = "Add Leadership Development";
require('header.php');
?>

<div class="container testimonialsContainer">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";
    echo "<h3>$text Leadership Development</h3>";

    $url = "addService.php";
    if ($action == 'edit') {
        $url .= '?action=edit';
    }
    ?>

    <form class="student-form" action="<?php echo $url ?>" method="post">

        <div class="form-group">
            <label for="key">Key Word</label>
            <input type="text" class="form-control" id="key" name="key" value="<?php echo $key ?>">
        </div>

        <div class="form-group">
            <label for="service">Leadership Development</label>
            <input type="text" class="form-control" id="service" name="service" value="<?php echo $service ?>">
        </div>
        <button id="submit" type="submit" class="btn btn-primary">

            <?php
            echo $action == "add" ? "Submit" : "Save Change";
            ?>
        </button>

    </form>
    <br>
    <a href="services.php">View Services</a>
</div>

<?php
require('footer.php');
?>
