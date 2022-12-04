<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];

$result = deleteMovie($dbConnect, $id);
    if ($result) 
    header("Location: movies_mg.php");
?>

