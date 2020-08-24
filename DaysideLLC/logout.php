<?php
session_start();
session_destroy();
$_SESSION = array();
if (isset($_COOKIE['username']) and isset($_COOKIE['password'])) {
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];
    setcookie('username', $username, time() - 1);
    setcookie('password', $password, time() - 1);
}
header('location: loginIndex.php');