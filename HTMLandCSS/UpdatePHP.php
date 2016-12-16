<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

//grab the observation data
$date = $_POST['ObservDate'];
$quad_GPS = $_POST['quad-N']."'".$_POST['quad-W']."''";
$quad_size = $_POST['QuadSize'];
$stem_count = $_POST['stem-count'];
$density = $_POST['density'];
$fol_cov = $_POST['foliar-cov'];
$circumference = $_POST['stem-circum'];
$habitat = $_POST['Habitat'];
$obs_notes = $_POST['obs-notes'];

// grab biodiversity data
$num_species = $_POST['NumSpecies'];
$weiner = $_POST['SWI'];
$BD_notes = $_POST['BD-notes'];

//grab competition data
$DBH = $_POST['DBH'];
$D_close = $_POST['D-Buck'];
$DBH_close = $_POST['DBH-neighbor'];
$D_non_buck = $_POST['D-NonBuck'];
$DBH_non_buck = $_POST['DBH-nonBuck'];
$comp_notes = $_POST['Comp-notes'];

$update_obs = "UPDATE observations SET date = '$date',quad_GPS = '$quad_GPS', quad_Size = $quad_size, num_stems= $stem_count, 
density= $density,foliar_Coverage= $fol_cov, ";

// link to submission confirm page
header("Location: {$_POST["submit-new"]}");
?>