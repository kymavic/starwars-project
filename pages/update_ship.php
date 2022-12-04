<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

$result = updateShip($dbConnect, $id, $name, $image, $description);
    if ($result) 
    header("Location: ships_mg.php");
?>

