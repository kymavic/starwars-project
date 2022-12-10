<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

deleteForce($dbConnect, $id);
header("Location: forces_mg.php");
?>

