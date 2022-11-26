<?php
session_start();

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
      <!--#SHIPS DETAIL-->
      <section class="ships-detail">
        <h2 class="h2 section-title">Ships</h2>
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
              <td class="detail-subtitle">Death Star</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Executor (Super Star Destroyer)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Home One (Mon Calamari cruiser)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Imperial landing craft (Sentinel-class landing craft)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Imperial shuttle (Lambda-class shuttle)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Imperial Star Destroyer</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Millennium Falcon (YT-1300 light freighter)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Rebel Medical Frigate (Nebulon-B frigate)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Rebel Transport (GR-75 medium transport)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Slave I (Firespray-31)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Tantive IV (Rebel Blockade Runner)</td>
              <td>
                <a href="ships.php" class="footer-link">View details</a>
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