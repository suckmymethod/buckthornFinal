<?php
session_start();


$report = $_POST['report'];

array_push($_SESSION['reports'], $report);

// redirect to the confirmation page
header("Location: {$_POST["submit-report"]}");
?>