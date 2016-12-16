<?php

// would be used with update observation
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

// finds all the data for the specified observation ID from the select box chosen
// NEEDED to find a spot to use these and javascript to fill the input fields
$SelectedObs = explode(' ', $_POST['PickedObs']);
$obsQuery = "Select * from observations where obs_ID = ". $SelectedObs[0];
$biodiQuery = "Select * from biodiversity where obs_ID = ". $SelectedObs[0];
$compQuery = "Select * from competition where obs_ID = ". $SelectedObs[0];
$recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"smm") or die("Some error occurred");
$_SESSION['obs'] = mysqli_query($recon, $obsQuery);
$_SESSION['bio'] = mysqli_query($recon, $biodiQuery);
$_SESSION['comp'] = mysqli_query($recon, $compQuery);

?>

