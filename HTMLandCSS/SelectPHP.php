<?php

// selects the observations for the select boxes on the update page and delete page
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$ObsQuery = "select obs_ID, g_ID, date from observations";
$GroupQuery = "select g_name from groups";
$recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"SMM") or die("Some error occurred");
$_SESSION['result'] = mysqli_query($recon, $ObsQuery);
$_SESSION['groups'] = mysqli_query($recon, $GroupQuery);
?>
