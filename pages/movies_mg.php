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
      <!--#DETAIL-->
      <section class="characters-detail">
        <h2 class="h2 section-title">Primary characters</h2>
        <br />
        <div class="container content-center">
          <form class="form-content">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" />
            <br>
            <label class="detail-subtitle" for="image">Image URL</label>
            <input type="text" name="image" id="image" placeholder="Image" />
            <br>
            <label class="detail-subtitle" for="year">Year</label>
            <input type="number" name="year" id="year" placeholder="Year" />
            <br>
            <label class="detail-subtitle" for="duration">Duration</label>
            <input type="text" name="duration" id="duration" placeholder="Duration" />
            <br>
            <label class="detail-subtitle" for="rating">Rating</label>
            <input type="number" name="rating" id="rating" placeholder="Rating" />
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
              <td class="detail-subtitle">Movie 1</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 2</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 3</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 4</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 5</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 6</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 7</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
              </td>
              <td>
                <a href="#" class="footer-link">Update</a>
              </td>
              <td>
                <a href="#" class="footer-link">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="detail-subtitle">Movie 8</td>
              <td>
                <a href="characters.php" class="footer-link">View details</a>
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