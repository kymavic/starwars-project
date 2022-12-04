<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];

$result = deleteShip($dbConnect, $id);
    if ($result) 
    header("Location: ships_mg.php");
?>

