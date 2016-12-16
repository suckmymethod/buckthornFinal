<?php
try {
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // series of variables that get the select box value and delete that selected observation
    $selection = explode(' ', $_POST['deleteme']);
    $query = "delete from observations where obs_ID = " . $selection[0];
    $recon = mysqli_connect("localhost", $_SESSION['user'], $_SESSION['pass'], "SMM") or die("Some error occurred");
    mysqli_query($recon, $query);

    header("Location: {$_POST["redirect"]}");
}catch(exception $e){
    header("Location: {$_POST["oops"]}"); // error occurred and go the page for the error
}
?>
