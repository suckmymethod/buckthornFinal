<?php
session_start();


try{
  $obs = array();
  $bioDiv = array();
  $comp = array();

  //grab the observation data
  $date = (string)$_POST['ObservDate'];
  $quad_GPS = $_POST['quad-N']."'".$_POST['quad-W']."''";
  $quad_size = (float)$_POST['QuadSize'];
  $stem_count = (int)$_POST['stem-count'];
  $fol_cov = (float)$_POST['foliar-cov'];
  $circumference = (int)$_POST['stem-circum'];
  $habitat = $_POST['Habitat'];
  $obs_notes = $_POST['obs-notes'];

  // push the data into observation array
  array_push($obs, $date, $quad_GPS, $quad_size, $stem_count, $fol_cov
  , $circumference, $habitat, $obs_notes);

  // grab biodiversity data
  $num_species = (int)$_POST['NumSpecies'];
  $weiner = (float)$_POST['SWI'];
  $BD_notes = $_POST['BD-notes'];
  
  // push the data into biodiversity array
  array_push($bioDiv, $num_species, $weiner, $BD_notes);

  //grab competition data
  $DBH = (float)$_POST['DBH'];
  $D_close = (float)$_POST['D-Buck'];
  $DBH_close = (float)$_POST['DBH-neighbor'];
  $D_non_buck = (float)$_POST['D-NonBuck'];
  $DBH_non_buck = (float)$_POST['DBH-nonBuck'];
  $comp_notes = $_POST['Comp-notes'];

  // push data into competition array
  array_push($comp, $DBH, $D_close, $DBH_close, $D_non_buck,
  $DBH_non_buck, $comp_notes);
} catch (Exception $e) {
  header("Location: {$_POST["error"]}");
}
//^^^^all this pulls vars from the webpage to be placed into the database


// redirect to submission/confirm pages
header("Location: {$_POST["submit-new"]}");
?>
