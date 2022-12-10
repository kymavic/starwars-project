<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

deletePlanet($dbConnect, $id);
header("Location: planets_mg.php");
?>

