<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];

$result = deleteForce($dbConnect, $id);
    if ($result) 
    header("Location: forces_mg.php");
?>

