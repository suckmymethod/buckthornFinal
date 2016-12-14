<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$_SESSION['user'] = $_POST['username'];
$_SESSION['pass'] = $_POST['password'];

$_Session['con'] = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"smm") or die("Some error occurred");

header("Location: {$_POST["redirect"]}");
?>
