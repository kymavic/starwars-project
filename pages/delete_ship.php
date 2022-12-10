<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

deleteShip($dbConnect, $id);
header("Location: ships_mg.php");
?>

