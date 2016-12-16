<?php
session_start();

$new = $_POST['newGroup'];
echo $new;

header("Location: {$_POST["redirect"]}");
?>
