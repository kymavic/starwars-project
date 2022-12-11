<?php
include_once('../functions/function.php');
$dbConnect = dbLink();
$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];
$year = $_POST['year'];
$duration = $_POST['duration'];
$rating = $_POST['rating'];
$description = $_POST['description'];

updateMovie($dbConnect,$id,$name,'movie_title');
updateMovie($dbConnect,$id,$image,'url_img');
updateMovie($dbConnect,$id,$year,'year');
updateMovie($dbConnect,$id,$duration,'duration');
updateMovie($dbConnect,$id,$rating,'rate');
updateMovie($dbConnect,$id,$description,'description');

header("Location: movies_mg.php");
?>

