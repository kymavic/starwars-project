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
      <section class="planets-detail">
        <div>
          <p class="detail-subtitle">Falleen</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Falleen">
          </figure>
          <p class="storyline">The Falleen are a fictional race of human-like reptilian people who come from a world called Falleen in the Midrim region in the Star Wars universe. They change the color and hue of their skin to convey their emotional states and can also affect the emotional state of others. Males and females of the race have strong pheromones which can easily attract women and men respectively of many humanoid species. The Falleen seldom leave their world due to the belief that their species is superior to all others. A notable Legends villain from this race is Prince Xizor. Another major villain was Darth Karrid of the Old Republic.</p>
        </div>

        <div>
          <p class="detail-subtitle">Far-Outsiders</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Far-Outsiders">
          </figure>
          <p class="storyline">Far-Outsiders is the cryptic code-name given by the Chiss who inhabit the edges of the galaxy, for the extra-galactic alien force that began assaulting the Unknown Regions in the years during the Galactic Civil War. They are probably the Yuuzhan Vong, who launched a siege on the galaxy from 25-30 ABY (After the Battle of Yavin). The name "Far-Outsiders" is also used by the inhabitants of Zonama Sekot to describe the invaders that attacked their planet. The Far-Outsiders are referred to in the singular, but the Chiss named "Stent" once told Mara Jade that there were "a hundred different threats out there that would freeze your blood if you knew about them. The Ruling Families can't stop them; neither can any power in the region.", suggesting that the term "Far-Outsiders" may apply to any unknown hostile race originating from outside the galaxy.</p>
        </div>

        <div>
          <p class="detail-subtitle">Feeorin</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Feeorin">
          </figure>
          <p class="storyline">Nym, a pirate from various Star Wars computer games (including the MMORPG "Star Wars Galaxies") was a Feeorin. It is said that Feeorins only grow stronger with age. Their homeworld was Odryn for a period of time in the Old Republic era, when the oldest and strongest Feeorin was chosen as their leader. The controversial Jedi master Feln was a Feeorin leader. It has been stated in several Star Wars novels and comics that there are only roughly 1 million Feeorins left in the galaxy, suggesting a decline from a larger number.</p>
        </div>

        <div>
          <p class="detail-subtitle">Ferroans</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Ferroans">
          </figure>
          <p class="storyline">Not a well known species, the only reference is in Force Heretic 1-3 and Rogue Planet. They have icy blue skin, white-toned hair, and live on Zonama Sekot, a living planet. The planet provides them fleshy habitats constructed of its own mass.</p>
        </div>

        <div>
          <p class="detail-subtitle">Firrerreo</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Firrerreo">
          </figure>
          <p class="storyline">The Firrerreo are a species of near-humans from the planet Firrerre. They have two-toned hair and golden skin. In their culture, if someone says a Firrerreo's name, the Firrerreo would be forced to serve the speaker, as saying a Firrerreo's name was a form of power.</p>
        </div>

        <div>
          <p class="detail-subtitle">Fosh</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Fosh">
          </figure>
          <p class="storyline">The Fosh are a sentient avian species. They are first mentioned in the Star Wars: The New Jedi Order series. The only Fosh mentioned in all the Star Wars books was the Jedi Knight Vergere.</p>
        </div>

        <div>
          <p class="detail-subtitle">Frozian</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Frozian">
          </figure>
          <p class="storyline">The Frozian are a species of sentient felines, hailing from the planet Froz. Their most distinctive characteristics are their triple-jointed hands, their double-jointed legs, and their infertility off their homeworld.</p>
        </div>

        <div>
          <p class="detail-subtitle">Gado</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Gado">
          </figure>
          <p class="storyline">Gados are tall, thin, furry sapients with long limbs and a worm-like head. Most of a Gado's inner organs are stretched out in ribbons that run throughout their body; thus, any injury can be life-threatening to a Gado. Gados are native to the planet of Abregado-rae. They formerly spoke a language called Gados, but now mostly speak Basic.</p>
        </div>

        <div>
          <p class="detail-subtitle">Gamorrean</p>
          <figure class="aliens-detail-banner">
            <img src="../images/alien1.jpg" alt="Gamorrean">
          </figure>
          <p class="storyline">A Gamorrean is a large pig-like humanoid from the fictional Star Wars series. The creatures have little intelligence and are often hired as guards, notably by Jabba the Hutt, who was fond of hiring them due to their low cost. On their home planet, Gamorreans exist in a sort of tribal political system dominated by the female sows. The males train for massive tribal conflicts that take place each year. The first time a space ship landed on Gamorr, the various tribes fought for days over who would win the right to approach it. The winning side eventually battered the vessel to pieces. Entries regarding the Gamorrean homeworld in travel guides simply read "DO NOT GO TO GAMORR!"</p>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>