<?php // this file is for pre-existing things before entry
session_start();


$reportArray = array(
    0 => "List all student researchers",
    1 => "List all teams, with team members indented underneath",
    2 => "List all details for an observation in a nicely formatted fashion",
    3 => "List a summary of all observations"
);

$_SESSION['reports'] = $reportArray;


$teamNames = array(
    0 => "The Veterans",
    1 => "Green Thumbs",
    2 => "Bio Bosses",
    3 => "Buckthorn Biologists",
    4 => "The Right Pack",
    5 => "httpster Scientists",
    6 => "Biothorns",
    7 => "Team Squared"
);

$_SESSION['teams'] = $teamNames;

?>