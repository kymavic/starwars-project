<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$name = $_POST['name'];
$description = $_POST['description'];

$result = addForce($dbConnect, $name, $description);
    if ($result) 
    header("Location: dashboard.php");
?>

