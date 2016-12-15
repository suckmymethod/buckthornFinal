<?php
session_start();

$new = $_POST['newGroup'];

array_push($_SESSION['teams'], $new);

header("Location: {$_POST["redirect"]}");
?>