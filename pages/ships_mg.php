<?php
session_start();
if (!array_key_exists('validate', $_SESSION) || $_SESSION['validate']!=true) {
  header("Location: login.php");
}
include_once('../functions/function.php');
$dbConnect = dbLink();
if($dbConnect) echo '<!-- Connection Stablished -->';
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
      <!--#SHIPS DETAIL-->
      <section class="default-detail">
        <h2 class="h2 section-title">Ships</h2>
        <br />
        <div class="container content-center">
          <form class="form-content" method="post" action="add_ship.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" required/>
            <br>
            <label class="detail-subtitle" for="image">Image URL</label>
            <input type="text" name="image" id="image" placeholder="Image" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
            <br>
            <textarea name="description" id="description" placeholder="Description"></textarea>
            <br>
            <br>
            <div class="inline-center">
              <button class="w-100 btn btn-lg btn-primary" type="submit" value="new">New</button>
            </div>
            <br>
            <br>
          </form>
        </div>
        <hr>
        <br>
        <?php
         listShips($dbConnect);
        ?>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>