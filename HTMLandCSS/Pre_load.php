<?php // this file is for pre-existing things before entry
session_start();

// load in login page, start with these reports as a basis
// Never actually used besides being tacked onto for the sesssion

$reportArray = array(
    0 => "List all student researchers",
    1 => "List all teams, with team members indented underneath",
    2 => "List all details for an observation in a nicely formatted fashion",
    3 => "List a summary of all observations"
);

$_SESSION['reports'] = $reportArray;

?>