<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

deleteAlien($dbConnect, $id);
header("Location: aliens_mg.php");
?>