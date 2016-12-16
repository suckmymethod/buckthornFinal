<?php
session_start();

try {

    $new = $_POST['newGroup'];

    array_push($_SESSION['teams'], $new);

    header("Location: {$_POST["redirect"]}");

}catch(Exception $e){
    header("Location: {$_POST["oops"]}");
}
?>