<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$selection = explode(' ', $_POST['deleteme']);
$query = "delete from observations where obs_ID = ". $selection[0];
$recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"smm") or die("Some error occurred");
mysqli_query($recon, $query);

header("Location: {$_POST["redirect"]}");
?>