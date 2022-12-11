<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

deleteMovie($dbConnect, $id);
header("Location: movies_mg.php");
?>

