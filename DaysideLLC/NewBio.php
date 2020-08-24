<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

//connect datebase
require('/home/afternoo/db.php');

$action = "add";
$bio = "";

//see if this an edit
if (!empty($_GET['bio'])) {

    //get the bio
    $bio = $_GET['bio'];

    //set a flag
    $action = "edit";

    //Query the database
    $bio = mysqli_real_escape_string($cnxn, $bio);
    $sql = "SELECT * FROM Bio  ";
}

// header tab title
$title = "Bio";
require('header.php');
?>

<div class="container testimonialsContainer">
    <?php
    $text = $action == "add" ? "Add a New" : "Edit";
    echo "<h3>$text Bio</h3>";

    $url = "addBio2.php";
    if ($action == 'edit') {
        $url .= '?action=edit';
    }
    ?>

    <form id="datatable" action="<?php echo $url ?>" method="post">

        <div class="form-group">
            <textarea class="form-control" id="biotext" name="bio"><?php echo $bio ?></textarea>
        </div>


        <button id="submit" type="submit" class="btn btn-primary">

            <?php
            echo $action == "add" ? "Submit" : "Save Change";
            ?>
        </button>
    </form>
    <a href="bio.php" class="btn btn-secondary mt-5">go back</a>
</div>

<div class="fixed-bottom position-relative">
    <?php
    require('footer.php');
    ?>
</div>