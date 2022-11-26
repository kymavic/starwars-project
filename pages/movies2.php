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
      <!-- 
        - #MOVIES DETAIL
      -->
      <section class="default-detail">
      <div class="section-container">
        <h2 class="h2 section-title">Movies</h2>
        <div>
          <p class="detail-subtitle">Moviex</p>
          <figure class="default-detail-banner">
            <img src="../images/moviex.jpg" alt="Moviex">
          </figure>
          <p class="text-content">2002</p>
          <p class="text-content">4.5</p>
          <p class="text-content">1.5h</p>
          <p class="storyline">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ab quam aperiam fugiat consequatur rem eaque. Deleniti sunt, minus cum unde doloribus impedit itaque neque enim officia, pariatur illum illo.</p>
        </div>
        <div>
          <p class="detail-subtitle">Moviex</p>
          <figure class="default-detail-banner">
            <img src="../images/moviex.jpg" alt="Moviex">
          </figure>
          <p class="text-content">2002</p>
          <p class="text-content">4.5</p>
          <p class="text-content">1.5h</p>
          <p class="storyline">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ab quam aperiam fugiat consequatur rem eaque. Deleniti sunt, minus cum unde doloribus impedit itaque neque enim officia, pariatur illum illo.</p>
        </div>
        <div>
          <p class="detail-subtitle">Moviex</p>
          <figure class="default-detail-banner">
            <img src="../images/moviex.jpg" alt="Moviex">
          </figure>
          <p class="text-content">2002</p>
          <p class="text-content">4.5</p>
          <p class="text-content">1.5h</p>
          <p class="storyline">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ab quam aperiam fugiat consequatur rem eaque. Deleniti sunt, minus cum unde doloribus impedit itaque neque enim officia, pariatur illum illo.</p>
        </div>
        <div>
          <p class="detail-subtitle">Moviex</p>
          <figure class="default-detail-banner">
            <img src="../images/moviex.jpg" alt="Moviex">
          </figure>
          <p class="text-content">2002</p>
          <p class="text-content">4.5</p>
          <p class="text-content">1.5h</p>
          <p class="storyline">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ab quam aperiam fugiat consequatur rem eaque. Deleniti sunt, minus cum unde doloribus impedit itaque neque enim officia, pariatur illum illo.</p>
        </div>
        <div>
          <p class="detail-subtitle">Moviex</p>
          <figure class="default-detail-banner">
            <img src="../images/moviex.jpg" alt="Moviex">
          </figure>
          <p class="text-content">2002</p>
          <p class="text-content">4.5</p>
          <p class="text-content">1.5h</p>
          <p class="storyline">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi ab quam aperiam fugiat consequatur rem eaque. Deleniti sunt, minus cum unde doloribus impedit itaque neque enim officia, pariatur illum illo.</p>
        </div>
       
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>