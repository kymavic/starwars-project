<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
$id= $_GET['id'];

//if($dbConnect) echo '<!-- Connection Stablished -->';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Wars</title>
  <!--Header-->
  <?php include('./sections/libraries.php'); ?>
</head>

<body>
  <!--Header-->
  <?php include('./sections/header.php'); ?>
  <!--main Content-->
  <main>
    <article>
      <!--#DETAIL-->
      <section class="default-detail">
        <h2 class="h2 section-title">Planets</h2>
        <br />
        
        <?php
         planetDetails($dbConnect,$id);
         ?>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>