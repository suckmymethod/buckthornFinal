<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

try{

  //grab the observation data
  $date = $_POST['ObservDate'];
  //if date is empty throw error, etc for other fields

  $quad_GPS = $_POST['quad-N']."N ".$_POST['quad-W']."W";
  $quad_size = (float)$_POST['QuadSize'];
  $stem_count = (int)$_POST['stem-count'];
  $density = (float)$_POST['density'];
  $fol_cov = (float)$_POST['foliar-cov'];
  $circumference = (int)$_POST['stem-circum'];
  $habitat = $_POST['Habitat'];
  $obs_notes = $_POST['obs-notes'];


  // grab biodiversity data
  $num_species = (int)$_POST['NumSpecies'];
  $weiner = (float)$_POST['SWI'];
  $BD_notes = $_POST['BD-notes'];


  //grab competition data
  $DBH = (float)$_POST['DBH'];
  $D_close = (float)$_POST['D-Buck'];
  $DBH_close = (float)$_POST['DBH-neighbor'];
  $D_non_buck = (float)$_POST['D-NonBuck'];
  $DBH_non_buck = (float)$_POST['DBH-nonBuck'];
  $comp_notes = $_POST['Comp-notes'];

  $recon = mysqli_connect("localhost",$_SESSION['user'],$_SESSION['pass'],"SMM") or die("Some error occurred");

  $topID = mysqli_query($recon, "select max(obs_ID) as max from observations") or die("Some error occured");
  $ID_num = 1+mysqli_fetch_array($topID)['max'];
  // $temp = mysqli_fetch_array($topID);
  // $ID_num = 1+$temp['max'];

  $groupName = $_POST['group-name'];
  $groupQuery = mysqli_query($recon, "select g_ID from groups where g_name = \"$groupName\"");
  $groupID = mysqli_fetch_array($groupQuery)['g_ID'];

  $obs_query ="INSERT into observations(obs_ID, g_ID, date, quad_GPS, quad_Size, num_stems, density, foliar_Coverage, stem_Circum, habitat, notes_photos) VALUES
($ID_num,$groupID,'$date','$quad_GPS',$quad_size,$stem_count,$density,$fol_cov,$circumference,'$habitat','$obs_notes')";

  $bio_query = "insert into biodiversity(obs_ID, date, weiner_index,notes) VALUES ($ID_num,'$date',$weiner,'$BD_notes')";

  $comp_query = "insert into competition(g_ID, obs_ID, date, diameter, neighbor_Dist, neighbor_Diam, non_neighbor_Dist, non_neighbor_Diam, notes) VALUES
($groupID,$ID_num,'$date',$DBH,$D_close,$DBH_close,$D_non_buck,$DBH_non_buck,'$comp_notes')";


  //we have the queries, now to execute
  mysqli_query($recon, $obs_query);
  mysqli_query($recon, $bio_query);
  //TODO mysqli_query($recon, $spec_query);
  mysqli_query($recon, $comp_query);
  // redirect to submission/confirm pages
  header("Location: {$_POST["submit-new"]}");
} catch (Exception $e) {
  header("Location: {$_POST["error"]}");
}



?>
