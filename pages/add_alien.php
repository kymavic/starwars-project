<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

$result = addAlien($dbConnect, $name, $image, $description);
    if ($result) 
    header("Location: aliens_mg.php");
?>

