<?php
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

updateAlien($dbConnect,$id,$name,'alien_races');
updateAlien($dbConnect,$id,$image,'url_img');
updateAlien($dbConnect,$id,$description,'description');

header("Location: aliens_mg.php");
?>

