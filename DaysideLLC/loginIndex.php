<?php

//Turn on error reporting -- this is critical!
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

//Start session
session_start();

//Initialize variables
$err = false;
$username = "";

//If the form has been submitted
if (!empty($_POST)) {

    //Get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = 'draday';
    $pass = 'Kappa1999';

    if ($username == $user && $password == $pass) {

        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + 86400 * 30);
            setcookie('password', $password, time() + 86400 * 30);
        }

        //Store username in the session array
        $_SESSION['un'] = $username;

        //Redirect user to index.php
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "admin.php";
        header("location: $page");
    } else {

        //Set error flag to true
        $err = true;
    }
}

// header tab title
$title = "Login";
require('header.php');

?>

    <div class="container" id="loginDiv">

        <h1 class="mt-5 pt-5">Admin Login</h1>

        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <?php
            if ($err) {
                echo '<span class="loginError">Incorrect login</span><br>';
            }
            ?>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary  mb-3 mt-3">Login</button>
        </form>
    </div>
<?php
if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    echo "<script>document.getElementById('username').value = '$username';
                    document.getElementById('password').value = '$password';
</script>";
}

require('footer.php');
?>