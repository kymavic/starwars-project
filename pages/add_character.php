<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

$result = addCharacter($dbConnect, $name, $image, $description);
    if ($result) 
    header("Location: dashboard.php");
?>

