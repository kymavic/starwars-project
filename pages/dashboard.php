<?php
session_start();
if($_SESSION['user'] == null){
    header("Location: login.php");
}
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
      <!--main Content-->
      <section class="movies">
        <div class="container">
          <h2 class="h2 section-title">Dashboard</h2>
          <li> <a href="movies_mg.php" class="footer-link">Movies management</a></li>
          <li> <a href="characters_mg.php" class="footer-link">Characters management</a></li>
          <li> <a href="planets_mg.php" class="footer-link">Planets management</a></li>
          <li> <a href="ships_mg.php" class="footer-link">Ships management</a></li>
          <li> <a href="aliens_mg.php" class="footer-link">Alien Races management</a></li>
          <li> <a href="force_mg.php" class="footer-link">Force management</a></li>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>