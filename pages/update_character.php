<?php
//session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$description = $_POST['description'];

updateCharacter($dbConnect,$id,$name,'name');
updateCharacter($dbConnect,$id,$image,'imgLocation');
updateCharacter($dbConnect,$id,$description,'description');

header("Location: characters_mg.php");
?>