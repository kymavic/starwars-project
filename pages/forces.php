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
      <!--#FORCE DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Force</h2>
          <div>
            <p class="detail-subtitle">The Force</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="The Force">
            </figure>
            <p class="storyline">The Force is a metaphysical and ubiquitous power in the Star Wars fictional universe. "Force-sensitive" characters use the Force throughout the franchise. Heroes like the Jedi seek to "become one with the Force", matching their personal wills with the will of the Force, while the Sith and other villains exploit the Force and try to bend it toward their destructive desires.</p>
          </div>

          <div>
            <p class="detail-subtitle">Jedi</p>
            <figure class="default-detail-banner">
              <img src="../images/jedi1.jpg" alt="Jedi">
            </figure>
            <p class="storyline">Jedi Knights, or collectively the Jedi Order are the main heroic protagonists of many works of the Star Wars franchise. Working symbiotically alongside the Old Galactic Republic, and later supporting the Rebel Alliance, the Jedi Order is depicted as a monastic, academic, military, and meritocratic peacekeeping organization whose origin dates back thousands of years before the events of the first film released in the franchise.</p>
          </div>

          <div>
            <p class="detail-subtitle">Sith</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Sith">
            </figure>
            <p class="storyline">They are the antithesis and ancient enemies of the Jedi. The Sith Order are depicted as an ancient monastic and kraterocratic cultist organization of supernaturally gifted Force-wielders driven by a machiavellian-imperialist agenda of galactic domination and revenge against the Jedi Order. The various antagonistic factions in the franchise, namely the Separatist Alliance, the First Galactic Empire, the Imperial Remnant and the First Order, all originated, either directly or indirectly, from the Sith.</p>
          </div>

        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>