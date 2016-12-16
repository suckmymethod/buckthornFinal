<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

try{
  $obs = array();
  $bioDiv = array();
  $comp = array();

  //TODO
  // we need a way to get the group ID from the select menu in order to properly associate new observations with their respective groups.
  // add density field in UI
  // unique observation ibase_add_user



  //grab the observation data
  $date = $_POST['ObservDate'];
  //if date is empty throw error, etc for other fields

  $quad_GPS = $_POST['quad-N']."N ".$_POST['quad-W']."W";
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

  $recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"smm") or die("Some error occurred");

  $topID = mysqli_query($recon, "select max(obs_ID) from observations") or die("Some error occured");
  $ID_num = 1+mysqli_fetch_row($topID)[0];

  $obs_query ="INSERT into observations(obs_ID, g_ID, date, quad_GPS, quad_Size, num_stems, density, foliar_Coverage, stem_Circum, habitat, notes_photos) VALUES
($ID_num,12,'$date','$quad_GPS',$quad_size,$stem_count,10,$fol_cov,$circumference,'$habitat','$obs_notes')";

$bio_query = "insert into biodiversity(obs_ID, date, weiner_index,notes) VALUES (7,'$date',$weiner,'$BD_notes')";


$comp_query = "insert into competition(g_ID, obs_ID, date, diameter, neighbor_Dist, neighbor_Diam, non_neighbor_Dist, non_neighbor_Diam, notes) VALUES
(12,7,'$date',6,$D_close,$DBH_close,$D_non_buck,$DBH_non_buck,'$comp_notes')";

  //we have the queries, now to execute
  mysqli_query($recon, $obs_query);
  mysqli_query($recon, $bio_query);
  //TODO mysqli_query($recon, $spec_query);
  mysqli_query($recon, $comp_query);
  // redirect to submission/confirm pages
  //header("Location: {$_POST["submit-new"]}");
} catch (Exception $e) {
  header("Location: {$_POST["error"]}");
}
//^^^^all this pulls vars from the webpage to be placed into the database



?>
