<?php
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

updateShip($dbConnect,$id,$name,'ship_name');
updateShip($dbConnect,$id,$image,'url_img');
updateShip($dbConnect,$id,$description,'description');

header("Location: ships_mg.php");
?>

