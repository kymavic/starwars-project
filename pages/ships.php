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
      <!--#SHIPS DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Ships</h2>
          <div>
            <p class="detail-subtitle">Death Star</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Death Star">
            </figure>
            <p class="storyline">The Death Star is the Empire's battle station which has ability to use a kyber-crystal powered laser to destroy entire planets. It appears throughout the Star Wars franchise, particularly the original trilogy.</p>
          </div>
          <div>
            <p class="detail-subtitle">Executor (Super Star Destroyer)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Executor (Super Star Destroyer)">
            </figure>
            <p class="storyline">The Executor serves as Darth Vader's flagship during the events of The Empire Strikes Back, leading the Death Squadron against the Rebel Alliance on Hoth and in pursuit of the Millennium Falcon. It features again in Return of the Jedi where, during the final space battle, it is destroyed after a Rebel A Wing crashes into the command bridge, causing the Executor to lose control and be destroyed as the second Death Star's gravity pulls the flagship into its surface.</p>
          </div>
          <div>
            <p class="detail-subtitle">Home One (Mon Calamari cruiser)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Home One (Mon Calamari cruiser)">
            </figure>
            <p class="storyline">Home One made its theatrical appearance in Return of the Jedi as Admiral Ackbar's flagship during the Battle of Endor. According to the old Expanded Universe (now Star Wars Legends) material, the Galactic Empire occupied the planet of Mon Calamari (also known as Mon Cala or Dac). After the Empire destroyed three floating cities to pacify the planet, the peaceful Mon Calamari converted their passenger liners and deep space exploration cruisers into warships, driving the Imperials from their homeworld prior to the Battle of Yavin. Darth Vader successfully subjugates Mon Cala, leading to a mass exodus of city-ships from Mon Cala. This fleet would later be commanded by Admiral Raddus and Admiral Ackbar and join the Rebel Alliance.</p>
          </div>
          <div>
            <p class="detail-subtitle">Imperial landing craft (Sentinel-class landing craft)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Imperial landing craft (Sentinel-class landing craft)">
            </figure>
            <p class="storyline">Imperial landing craft (or Sentinel-class landing craft) were designed for the Special Edition release of Star Wars Episode IV: A New Hope and created entirely with CGI. However, they first appeared in products of the Star Wars: Shadows of the Empire multimedia campaign. According to in-universe sources, the primary mission for Sentinel-class craft is deploying Imperial military forces from orbit onto a planet, though it can be used for other missions including short-range scouting, cargo transport and close air support. Heavily armored and equipped with powerful deflector shields, Imperial landers carry eight laser cannons, two concussion missile launchers, two blaster cannons and an ion cannon turret. As a troop transport it can carry 54 stormtroopers into battle, or carry vehicles via cargo pod installed on its underside.</p>
          </div>
          <div>
            <p class="detail-subtitle">Imperial shuttle (Lambda-class shuttle)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Imperial shuttle (Lambda-class shuttle)">
            </figure>
            <p class="storyline">Lambda-class T4a shuttles first appeared in Star Wars: Episode VI - Return of the Jedi, and were later added to the Special Edition release of The Empire Strikes Back. Joe Johnston, Ralph McQuarrie, and Nilo Rodis-Jamero borrowed elements from the skyhopper designed for A New Hope when refining the shuttle's appearance. Earlier versions were boxy, boat-like, or had TIE fighter-like components. Industrial Light and Magic's modelmakers made two shooting models, although CGI versions were used for the craft's Special Edition appearance in The Empire Strikes Back. The Theta-class shuttle in Revenge of the Sith was designed to appear like a predecessor to the Lambda class. A Lambda-class shuttle makes a cameo appearance during the docking sequence of Inara Serra's shuttle in "Serenity", the pilot episode of Joss Whedon's Firefly.</p>
          </div>
          <div>
            <p class="detail-subtitle">Imperial Star Destroyer</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Imperial Star Destroyer">
            </figure>
            <p class="storyline">The Star Destroyers are the Galactic Empire's assault ships. Much like the Republic assault ships, the two have similar hulls, bridges, engines, and many other parts. They appear in a variety of forms throughout the Star Wars franchise. The Ravager, an Executor-class Star Dreadnought, was destroyed during the Battle of Jakku.</p>
          </div>
          <div>
            <p class="detail-subtitle">Millennium Falcon (YT-1300 light freighter)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Millennium Falcon (YT-1300 light freighter)">
            </figure>
            <p class="storyline">The Millennium Falcon is a highly modified YT-1300F light freighter captained by smuggler Han Solo (Harrison Ford) and his Wookiee first mate, Chewbacca (Peter Mayhew).</p>
          </div>
          <div>
            <p class="detail-subtitle">Rebel Medical Frigate (Nebulon-B frigate)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Rebel Medical Frigate (Nebulon-B frigate)">
            </figure>
            <p class="storyline">Luke Skywalker (Mark Hamill) receives a prosthetic hand aboard the Redemption, a modified Nebulon-B escort frigate, at the conclusion of Star Wars: Episode V - The Empire Strikes Back. A Nebulon-B medical frigate is part of the Rebel Alliance fleet at the Battle of Endor in Return of the Jedi. Expanded Universe material states that relatively affordable Nebulon-B frigates, which are effective at engaging starfighters, are used by both the Rebellion and the Galactic Empire. The frigates appear in several LucasArts titles, including the X-Wing flight simulators series, Empire at War real-time strategy game, and Star Wars: Battlefront, as well as episodes 'Zero Hour' and 'Secret Cargo' of Star Wars Rebels.</p>
          </div>
          <div>
            <p class="detail-subtitle">Rebel Transport (GR-75 medium transport)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Rebel Transport (GR-75 medium transport)">
            </figure>
            <p class="storyline">GR-75 medium transports are a class of ship which first appears in The Empire Strikes Back during the evacuation of Echo Base on Hoth, and have made appearances in other media. Only 90 m (300 ft) long, these ships are described in Star Wars sources as largely consisting of a thick outer hull with its interior entirely open for modular cargo pods. These are held in place by a magnetic shield and allows the transport to accommodate 19,000 metric tons (42,000,000 lb) of cargo. Cheap and easy to maintain, these transports are only equipped with four twin laser cannons and minimal deflector shields, though some are retrofitted for combat.</p>
          </div>
          <div>
            <p class="detail-subtitle">Slave I (Firespray-31)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Slave I (Firespray-31)">
            </figure>
            <p class="storyline">Slave I is the starship used by bounty hunter Boba Fett (Jeremy Bulloch) in The Empire Strikes Back and The Mandalorian (in which Boba is played by Temuera Morrison), and by his father Jango Fett (also played by Morrison) in Attack of the Clones. The ship's design is said to resemble the shape of a street lamp. However, the actual inspiration for the shape of the ship was a radar dish, according to Nilo Rodis-Jamero, the assistant art director and visual effects creator on The Empire Strikes Back. Rodis-Jamero created the initial design after seeing Joe Johnston's ideas for Boba Fett, and states that "the original design I had was round, but when you looked at it from the side, it became elliptical...George thought it was elliptical, so that's what it became." He goes on to say that "hen building the ship at ILM, someone looked at the street lamps and pointed out that they looked like Boba's ship. So everyone began to think that was where I got the idea for the design." Its appearance in the original release of The Empire Strikes Back was realized by a combination of matte paintings and a 69-centimeter (27 in) model.</p>
          </div>
          <div>
            <p class="detail-subtitle">Tantive IV (Rebel Blockade Runner)</p>
            <figure class="default-detail-banner">
              <img src="../images/ship1.jpg" alt="Tantive IV (Rebel Blockade Runner)">
            </figure>
            <p class="storyline">The Tantive IV, identified in source material as a CR90 Corellian corvette, first appears in the opening scene of the original Star Wars: Episode IV - A New Hope, commanded by Princess Leia (Carrie Fisher) as she evades pursuit from Darth Vader (David Prowse/James Earl Jones) aboard his Imperial Star Destroyer. Her adoptive father Bail Organa (Jimmy Smits) is seen using a similar vessel during the prequel movie Revenge of the Sith, identified in source material as the CR70 model Tantive III. Corellian corvettes, also known as Rebel Blockade Runners for their powerful engine array and ability to outrun customs vessels, are manufactured by the Corellian Engineering Corporation.</p>
          </div>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>