<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

// submit a report
$report = $_POST['report'];

array_push($_SESSION['reports'], $report);

// redirect to the confirmation page
header("Location: {$_POST["submit-report"]}");
?>