<?php
session_start();
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
      <!-- 
        - #ALIEN DETAIL
      -->
      <section class="default-detail">
        <div class="section-container">
        <?php
          foreach (readAliens($dbConnect) as $row){
            echo '<div>';
            echo '  <p class="detail-subtitle">'.$row['name'].'</p>';
            echo '  <figure class="default-detail-banner">';
            echo '    <img src="'.$row['url_img'].'" alt="'.$row['name'].'">';
            echo '  </figure>';
            echo '  <p class="storyline">'.$row['description'].'</p>';
            echo '</div>';
          }
          ?>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>