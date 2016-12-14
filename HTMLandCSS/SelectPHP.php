<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$ObsQuery = "select obs_ID from observations";
$recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"smm") or die("Some error occurred");
$_SESSION['result'] = mysqli_query($recon, $ObsQuery);
?>
