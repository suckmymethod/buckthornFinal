<?php
session_start();


$report = $_POST['report'];

array_push($_SESSION['reports'], $report);

print_r($_SESSION['reports'][4]);

//header("Location: {$_POST["submit-report"]}");
?>