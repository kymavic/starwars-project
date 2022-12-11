<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$name = $_POST['name'];
$image = $_POST['image'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$rating = $_POST['rating'];
$description = $_POST['description'];

$result = addMovie($dbConnect, $name, $image, $year, $duration, $rating, $description);
    if ($result) 
    header("Location: movies_mg.php");
?>

