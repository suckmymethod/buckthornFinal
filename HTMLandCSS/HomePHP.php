<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');


// connection to the server with proper credentials
$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];

$_SESSION['con'] = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"SMM") or die("Some error occurred");

header("Location: {$_POST["redirect"]}");
?>
