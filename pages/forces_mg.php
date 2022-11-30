<?php
session_start();
include_once('../functions/function.php');
    $dbConnect = dbLink();
    if($dbConnect) echo '<!-- Connection Stablished -->';
    
if ($_SESSION['user'] == null) {
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
      <!--#DETAIL-->
      <section class="default-detail">
        <h2 class="h2 section-title">Force</h2>
        <br />
        <div class="container content-center">
          <form class="form-content">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" />
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
              <button class="w-100 btn btn-lg btn-primary" type="submit" value="save">Save</button>
            </div>
            <br>
            <br>
          </form>
        </div>
        <hr>
        <br>
        <table class="content-center">
          <tbody>
            <tr>
              <td class="detail-subtitle">Telekinesis</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Mind Tricks</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Force Lightning</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Force Drain</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Force Sense</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Force Projection</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Mind Probe</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Transfer Essence</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">The Creation Of Life</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>

            <tr>
              <td class="detail-subtitle">Thought Bomb</td>
              <td>
                <a href="forces.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>