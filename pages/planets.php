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
  <!--favicon-->
  <link rel="shortcut icon" href="../faicon.svg" type="image/svg+xml">
  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../css/style.css">
  <!--
        Google fronts links
    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="../index.php" class="logo">
        <img src="../images/logo.svg" alt="Star Wars logo">
      </a>

      <div class="header-actions">



        <div class="lang-wrapper">

        </div>

        <?php if(!array_key_exists('user', $_SESSION)){
            echo '<a class="btn btn-primary" href="./login.php">Sign in</a>';
          }else{
            echo '<a class="btn btn-primary" href="./logout.php">'.$_SESSION['user']['name'].' - Log out</a>';
          } ?>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="index.php" class="logo">
            <img src="../images/logo.svg" alt="Star Wars Logo">
          </a>

          <?php if (!array_key_exists('user', $_SESSION)) {
            echo '<a  class="menu-close-btn" href="./login.php"> <ion-icon name="log-in-outline"></ion-icon></a>';
          } else {
            echo '<a  class="menu-close-btn" href="./logout.php"> <ion-icon name="log-out-outline"></ion-icon></a>';
          } ?>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="../index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="movies.php" class="navbar-link">Movies</a>
          </li>

          <li>
            <a href="characters.php" class="navbar-link">Characters</a>
          </li>
          <div class="dropdown">
            <button class="dropbtn" onclick="myFunction()">Categories
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="myDropdown">
              <li> <a href="ships.php" class="navbar-link">Ships</a></li>
              <li> <a href="planets.php" class="navbar-link">Planets</a></li>
              <li> <a href="force.php" class="navbar-link">Force</a></li>
              <li> <a href="jedi.php" class="navbar-link">Jedi</a></li>
              <li> <a href="sith.php" class="navbar-link">Sith</a></li>
              <li> <a href="alien_races.php" class="navbar-link">Aliens</a></li>
            </div>
          </div>
          <li>
            <a href="#" class="navbar-link">Forums</a>
          </li>
          <?php if (array_key_exists('user', $_SESSION)) {
                        echo '<li><a href="dashboard.php" class="navbar-link">Dashboard</a></li>';
                    } ?>
        </ul>
        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>


      </nav>

    </div>
  </header>
  <!--main Content-->


  <!-- 
        - #PLANET DETAIL
      -->

  <section class="planets-detail">
    <h2 class="h2 section-title">Planets</h2>
    <div class="container">
      <p class="detail-subtitle">Abafar</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Abafar">
      </figure>
      <p class="storyline">A desert planet located in the Outer Rim with a completely white surface. Known as The Void, the planet is barely populated but is home to massive amounts of rhydonium, a scarce and volatile fuel.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Agamar</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Agamar">
      </figure>
      <p class="storyline">A barren, rocky planet in the Outer Rim. Site of a still-active reserve of Separatist droids that became known for surviving the Clone Wars.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Ahch-To</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Ahch-To">
      </figure>
      <p class="storyline">Largely oceanic planet on which Luke Skywalker has been hiding for several years, and the location of the first Jedi Temple and the Tree Library of sacred Jedi texts. Porgs, Lanai and thala-sirens are among the native species.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Ajan Kloss</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Ajan Kloss">
      </figure>
      <p class="storyline">A jungle moon which serves as a new base of operations for the Resistance. Years before, Leia and Luke were training there. Leia Organa dies here after using the last of her energy to reach out to her son through the Force.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Akiva</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Akiva">
      </figure>
      <p class="storyline">Jungle planet and home of Norra and Temmin Wexley, and a primary setting in Aftermath.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Alderaan</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Alderaan">
      </figure>
      <p class="storyline">Forests, mountains; home planet of Princess Leia and the House of Organa. Destroyed by the first Death Star as punishment for involvement in the Rebel Alliance and also as a demonstration of power.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Aaleen</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Aaleen">
      </figure>
      <p class="storyline">A subterranean world located in the Mid Rim. The native species include, the surface dwelling beings called the Aleena and sentient tree-like beings called Kindalo.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Alzoc III</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Alzoc III">
      </figure>
      <p class="storyline">Ice planet, with many glaciers, and in its surface lies a crashed separatist carrier, with an anti-gravitational device.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Anaxes</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Anaxes">
      </figure>
      <p class="storyline">A rocky planet located in the Azure sector of the galaxy's Core Worlds region. A majority of its surface was covered with tall, red plant-like life. In the early years of the Imperial Era, the planet was destroyed in a cataclysm, with the remains becoming the Anaxes asteroid belt.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Ando</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Ando">
      </figure>
      <p class="storyline">A water-covered planet located in the Outer Rim, it is home to the amphibious Aqualish species and endures great turmoil during the Separatist Crisis.</p>
    </div>
    <div class="container">
      <p class="detail-subtitle">Anoat</p>
      <figure class="planets-detail-banner">
        <img src="../images/planet1.jpg" alt="Anoat">
      </figure>
      <p class="storyline">Polluted; A nearly inhospitable planet used by the Empire.</p>
    </div>
  </section>


  <!--  - #FOOTER -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="../index.php" class="logo">
            <img src="../images/logo.svg" alt="Star Wars Logo">
          </a>

          <ul class="footer-list">

            <li>
              <a href="../index.php" class="footer-link">Home</a>
            </li>
            <li>
              <a href="movies.php" class="footer-link">Movies</a></a>
            </li>

            <li>
              <a href="characters.php" class="footer-link">Characters</a></a>
            </li>

            <li>
              <a href="ships.php" class="footer-link">Ships</a>
            </li>

            <li>
              <a href="planets.php" class="footer-link">Planets</a>
            </li>

            <li>
              <a href="force.php" class="footer-link">Force</a>
            </li>
            <li>
              <a href="jedi.php" class="footer-link">Jedi</a>
            </li>
            <li>
              <a href="sith.php" class="footer-link">Sith</a>
            </li>
            <li>
              <a href="alien_races.php" class="footer-link">Aliens</a>
            </li>
            <li>
              <a href="#" class="footer-link">Forums</a>
            </li>
          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Support</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">Star Wars</a>. All Rights Reserved
        </p>


      </div>
    </div>

  </footer>





  <!-- 
- #GO TO TOP
-->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>



  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--Javacript-->
  <script src="../js/script.js"></script>
</body>

</html>