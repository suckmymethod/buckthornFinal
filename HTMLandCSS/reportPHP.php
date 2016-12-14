<?php
session_start();


$report = $_POST['report'];

array_push($_SESSION['reports'], $report);


header("Location: {$_POST["submit-report"]}");
?>