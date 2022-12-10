<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_GET['id'];

 deleteCharacter($dbConnect, $id);
   header("Location: characters_mg.php");
?>

