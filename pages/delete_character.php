<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];

$result = deleteCharacter($dbConnect, $id);
    if ($result) 
    header("Location: characters_mg.php");
?>

