<?php
session_start();
$recon = mysqli_connect("localhost", $_SESSION['user'], $_SESSION['pass'], "smm") or die("Some error occurred");

try {
    // adding a new group
    $new = $_POST['newGroup'];
    $topGroupID = mysqli_query($recon, "select max(g_ID) from groups") or die("Some error occured");
    $newGroupID = 1 + mysqli_fetch_row($topGroupID)[0];
    $query = "INSERT INTO groups(g_name, g_ID) VALUES ('$new', $newGroupID)";
    echo $query;
    mysqli_query($recon, $query);

    array_push($_SESSION['teams'], $new);

    header("Location: {$_POST["redirect"]}");

} catch (Exception $e) {
    header("Location: {$_POST["oops"]}");
}
?>