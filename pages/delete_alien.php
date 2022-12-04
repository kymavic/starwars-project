<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];

$result = deleteAlien($dbConnect, $id);
    if ($result) 
    header("Location: aliens_mg.php");
?>

