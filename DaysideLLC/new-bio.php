<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

//connect datebase
require('/home/afternoo/db.php');

$action = "add";
$accomplishment = $key = "";
//see if this an edit
if (!empty($_GET['id'])) {
    //get the sid
    $id = $_GET['id'];

    //set a flag
    $action = "edit";

    //Query the database
    $accomplishment = mysqli_real_escape_string($cnxn, $accomplishment);
    $sql = "SELECT * FROM Accomplishments where id='$id'";

    $result = mysqli_query($cnxn, $sql);

    $row = mysqli_fetch_array($result);
    $id = $row['id'];
    $accomplishment = $row['accomplishment'];
    $key = $row['KeyWord'];
}

require('check-login.php');

// header tab title
$title = "Add Accomplishment";
require('header.php');
?>


<div class="container testimonialsContainer">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";
    echo "<h3>$text accomplishment</h3>";

    $url = "add-bio.php";
    if ($action == 'edit') {
        $url .= '?action=edit';
    }
    ?>

    <form id="datatable" action="<?php echo $url ?>" method="post">
        <div class="form-group">
            <label for="key">Key Word</label>
            <input type="text" class="form-control"
                   id="key" name="key"
                   value="<?php echo $key ?>">
        </div>

        <div class="form-group">
            <label for="accomplishment">accomplishment</label>
            <input type="text" class="form-control"
                   id="accomplishment" name="accomplishment"
                   value="<?php echo $accomplishment ?>">
        </div>
        <button id="submit" type="submit" class="btn btn-primary">

            <?php
            echo $action == "add" ? "Submit" : "Save Change";

            ?>
        </button>
    </form>
    <a href="bio.php" class="btn btn-secondary mt-5">go back</a>
</div>

<?php
require('footer.php');
?>
