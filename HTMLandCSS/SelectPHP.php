<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$ObsQuery = "select obs_ID, g_ID, date from observations";
$_SESSION['result'] = mysqli_query($_SESSION['con'], $ObsQuery);
?>