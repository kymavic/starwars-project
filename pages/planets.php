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
        - #PLANET DETAIL
      -->
      <section class="default-detail">
      <div class="section-container">
        <h2 class="h2 section-title">Planets</h2>
        <div>
          <p class="detail-subtitle">Abafar</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Abafar">
          </figure>
          <p class="storyline">A desert planet located in the Outer Rim with a completely white surface. Known as The Void, the planet is barely populated but is home to massive amounts of rhydonium, a scarce and volatile fuel.</p>
        </div>
        <div>
          <p class="detail-subtitle">Agamar</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Agamar">
          </figure>
          <p class="storyline">A barren, rocky planet in the Outer Rim. Site of a still-active reserve of Separatist droids that became known for surviving the Clone Wars.</p>
        </div>
        <div>
          <p class="detail-subtitle">Ahch-To</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Ahch-To">
          </figure>
          <p class="storyline">Largely oceanic planet on which Luke Skywalker has been hiding for several years, and the location of the first Jedi Temple and the Tree Library of sacred Jedi texts. Porgs, Lanai and thala-sirens are among the native species.</p>
        </div>
        <div>
          <p class="detail-subtitle">Ajan Kloss</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Ajan Kloss">
          </figure>
          <p class="storyline">A jungle moon which serves as a new base of operations for the Resistance. Years before, Leia and Luke were training there. Leia Organa dies here after using the last of her energy to reach out to her son through the Force.</p>
        </div>
        <div>
          <p class="detail-subtitle">Akiva</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Akiva">
          </figure>
          <p class="storyline">Jungle planet and home of Norra and Temmin Wexley, and a primary setting in Aftermath.</p>
        </div>
        <div>
          <p class="detail-subtitle">Alderaan</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Alderaan">
          </figure>
          <p class="storyline">Forests, mountains; home planet of Princess Leia and the House of Organa. Destroyed by the first Death Star as punishment for involvement in the Rebel Alliance and also as a demonstration of power.</p>
        </div>
        <div>
          <p class="detail-subtitle">Aaleen</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Aaleen">
          </figure>
          <p class="storyline">A subterranean world located in the Mid Rim. The native species include, the surface dwelling beings called the Aleena and sentient tree-like beings called Kindalo.</p>
        </div>
        <div>
          <p class="detail-subtitle">Alzoc III</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Alzoc III">
          </figure>
          <p class="storyline">Ice planet, with many glaciers, and in its surface lies a crashed separatist carrier, with an anti-gravitational device.</p>
        </div>
        <div>
          <p class="detail-subtitle">Anaxes</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Anaxes">
          </figure>
          <p class="storyline">A rocky planet located in the Azure sector of the galaxy's Core Worlds region. A majority of its surface was covered with tall, red plant-like life. In the early years of the Imperial Era, the planet was destroyed in a cataclysm, with the remains becoming the Anaxes asteroid belt.</p>
        </div>
        <div>
          <p class="detail-subtitle">Ando</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Ando">
          </figure>
          <p class="storyline">A water-covered planet located in the Outer Rim, it is home to the amphibious Aqualish species and endures great turmoil during the Separatist Crisis.</p>
        </div>
        <div>
          <p class="detail-subtitle">Anoat</p>
          <figure class="default-detail-banner">
            <img src="../images/planet1.jpg" alt="Anoat">
          </figure>
          <p class="storyline">Polluted; A nearly inhospitable planet used by the Empire.</p>
        </div>
      </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>