<?php
session_start();
/*
if($_SESSION['user'] == null){
    header("Location: login.php");
}*/
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
      <section class="ship-detail">
        <h2 class="h2 section-title">Title</h2>
        <div class="container">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit et voluptates atque vero, vel, aliquam in nulla nihil magnam cum, illo officia pariatur ab deleniti natus impedit quisquam error vitae.
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>