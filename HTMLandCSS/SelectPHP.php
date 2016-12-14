<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');

$ObsQuery = "select obs_ID, g_ID, date from observations";
$_Session['result'] = mysqli_query($_Session['con'], $ObsQuery);