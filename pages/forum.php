<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
if ($dbConnect) echo '<!-- Connection Stablished -->';
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
        <h2 class="h2 section-title">Forum</h2>
        <br />
        <div class="container content-center">
          <form class="form-content" method="post" action="add_forum_message.php">
            <label class="detail-subtitle" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email@example.com" />
            <br>
            <label class="detail-subtitle" for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" autocomplete="forum-password"/>
            <br>
            <label class="detail-subtitle" for="message">Message</label>
            <br>
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <br>
            <br>
            <div class="inline-center">
              <button class="w-100 btn btn-lg btn-primary" type="submit" value="post">Post</button>
            </div>
            <br>
            <br>
          </form>
        </div>
        <hr>
        <br>
        <table class="content-center">
          <tbody>
          <?php
            foreach (readForumMessages($dbConnect) as $row){
              echo '<div class="forum-content">';
              echo '  <p class="forum-item forum-email"><ion-icon name="person-circle-outline"/>User</ion-icon>'.$row['email'].'</p>';
              echo '  <p class="forum-item forum-message"><ion-icon name="mail-outline">Message</ion-icon>'.$row['message'].'</div>';
              echo '</div>';
            }
          ?>
          </tbody>
        </table>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>