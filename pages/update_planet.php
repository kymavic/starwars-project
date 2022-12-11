<?php
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

updatePlanet($dbConnect,$id,$name,'planet_name');
updatePlanet($dbConnect,$id,$image,'url_img');
updatePlanet($dbConnect,$id,$description,'description');

header("Location: planets_mg.php");
?>

