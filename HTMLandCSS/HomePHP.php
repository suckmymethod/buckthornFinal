<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];

//$con = mysqli_connect("localhost") or die("Some error occurred");
//
//$query = "show tables";
//$result = mysqli_query($con, $query);
//echo $result;

header("Location: {$_POST["redirect"]}");
?>
