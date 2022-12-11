<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

$result = addForumMessage($dbConnect, $email, $password,$message);
    if ($result) 
    header("Location: forum.php");
?>

