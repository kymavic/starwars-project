<?php
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

updateForce($dbConnect,$id,$name,'name');
updateForce($dbConnect,$id,$description,'description');

header("Location: forces_mg.php");
?>