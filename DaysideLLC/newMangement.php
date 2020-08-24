<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

//connect datebase
require('/home/afternoo/db.php');

$action = "add";
$mangement = $key = "";

//see if this an edit
if (!empty($_GET['id'])) {
    //get the sid
    $mangement = $_GET['id'];
    //echo $sid;

    //set a flag
    $action = "edit";

    //Query the database
    $mangement = mysqli_real_escape_string($cnxn, $mangement);
    $sql = "SELECT * FROM ChangeManagement where id ='$mangement'";
    //echo $sql;

    $result = mysqli_query($cnxn, $sql);
    //var_dump($result);
    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $mangment = $row['Service'];
    $key = $row['KeyWord'];
}

// header tab title
$title = "Add Change Management";
require('header.php');
?>



<div class="container testimonialsContainer">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";
    echo "<h3>$text Change Mangement</h3>";

    $url = "addMangement.php";
    if ($action == 'edit') {
        $url .= '?action=edit';
    }
    ?>

    <form id="datatable" action="<?php echo $url ?>" method="post">

        <div class="form-group">
            <label for="key">Key Word</label>
            <input type="text" class="form-control" id="key" name="key" value="<?php echo $key ?>">
        </div>

        <div class="form-group">
            <label for="mangement">Change Mangement</label>
            <input type="text" class="form-control" id="service" name="mangement" value="<?php echo $mangement ?>">
        </div>
        <button id="submit" type="submit" class="btn btn-primary">

            <?php
            echo $action == "add" ? "Submit" : "Save Change";
            ?>
        </button>
    </form><br>
    <a href="services.php">View Services</a>
</div>

<div class="fixed-bottom position-relative">
    <?php
    require('footer.php');
    ?>
</div>
