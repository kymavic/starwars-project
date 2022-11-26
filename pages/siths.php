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
      <!--#SITH DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Siths</h2>
          <div>
            <p class="detail-subtitle">Darth Sidious</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Sidious">
            </figure>
            <p class="storyline">Darth Sidious (Sheev Palpatine) was a human Dark Lord of the Sith who appeared in each trilogy of the Skywalker Saga. Originally the eldest son of an aristocratic family from the planet Naboo, he rose to power within the Galactic Republic's government system starting from Senator of his homeworld, then to Supreme Chancellor of the Republic, and finally to self-proclaimed Emperor of the Galactic Empire. This was done by cultivating a public image as a humble and competent politician while secretly mastering dark Sith arts studying under Plagueis, and planning the destruction of the Jedi Order and Republic. Eventually, by manipulating disaffected political groups and using double agents to sow discord, Palpatine fomented a civil war that provided an opportunity for him to seize absolute power. He had three known Sith apprentices: Darth Maul, Darth Tyranus, and Darth Vader. He was eventually betrayed and killed by his last, Vader, at the end of Return of the Jedi. He returned more than 30 years later in The Rise of Skywalker, having managed to cheat death through powerful mastery of the dark side of the Force. He attempted to reclaim control of the galaxy through the Sith Eternal's fleet of Xyston-class Star Destroyers, the Final Order, but was finally killed by his granddaughter, Rey, who deflected his Force lightning back at him using the Skywalker lightsabers. Darth Sidious' final death marked what appears to be the definitive end of the Sith.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Maul</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Maul">
            </figure>
            <p class="storyline">Darth Maul was a Dathomirian Zabrak Sith Lord who served as the first apprentice of Darth Sidious. He first appeared in Star Wars: Episode I – The Phantom Menace, where he was ordered by his master to capture Queen Amidala of Naboo in order for her to sign a treaty that would legalize the Trade Federation's invasion of the planet. During a duel with Jedi Master Qui-Gon Jinn and his Padawan apprentice Obi-Wan Kenobi, who were assigned to protect Amidala, Maul killed the former, but was sliced in half by Obi-Wan and fell down a shaft. Although presumed dead, he survived his injuries and ended up on the junk planet Lotho Minor, where he would become a cyborg and be driven to insanity. He was eventually rescued by his brother Savage Opress twelve years later, during the Clone Wars. After being provided with a pair of new robotic legs by the Nightsisters, led by Maul's mother, Talzin, he sought revenge against Obi-Wan. This culminated with Maul allying with various crime syndicates, taking over the planet Mandalore, and killing Duchess Satine Kryze, whom Obi-Wan loved. Although he was then captured by his former master, Sidious, who came to see him as a rival, he managed to escape and rebuild his criminal empire. Following his overthrow and capture by the Galactic Republic, Maul escaped once again and went into hiding while no longer being a Sith Lord. During the reign of the Galactic Empire, Maul resurfaced as a crime lord and ran his syndicate, the Crimson Dawn, from the shadows, but is eventually stranded on the Sith world of Malachor. He escaped years later, after meeting Ezra Bridger, whom he then forced to assist in locating Obi-Wan. Finding him to be hiding on Tatooine, Maul fought his old nemesis one last time and was mortally wounded. Before dying, Maul took comfort in the fact that Obi-Wan was looking after who he believed to be the "Chosen One", who would one day avenge them by destroying the Sith.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Tyranus</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Tyranus">
            </figure>
            <p class="storyline">Darth Tyranus (Count Dooku) was a human Dark Lord of the Sith and the second apprentice of Darth Sidious, first appearing in Star Wars: Episode II – Attack of the Clones. Born to the royal family of the planet Serenno, Dooku was rejected by his family as an infant upon the discovery of his connection to the Force, which his father in particular feared and, as such, abandoned him after contacting the Jedi Order to come and take him to Coruscant. During his training under Yoda, Dooku proved himself to be both strong with the Force and a skilled duelist, regarded by many as one of the best in the Order. Upon becoming a Jedi Master, he left the Order and returned to Serenno to reclaim his title and heritage as a nobleman. He later fell to the dark side and became a Sith Lord and Darth Sidious' puppet. Dooku helped Sidious with his galactic conquest plans, recruiting the bounty hunter Jango Fett as the template of the clone army that would be used by the Galactic Republic, and forming the Confederacy of Independent Systems from various planets and systems that wanted to become independent from the Republic, resulting in the Clone Wars. Dooku served as the figurehead of the Separatist Alliance throughout the Clone Wars, until meeting his demise at the hands of Anakin Skywalker in Star Wars: Episode III – Revenge of the Sith. In his final moments, Dooku realized that Sidious had merely used him to aid his schemes, and had planned to have him killed and replaced by someone more powerful all along.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Vader</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Vader">
            </figure>
            <p class="storyline">Darth Vader (Anakin Skywalker) was a human-cyborg Dark Lord of the Sith and the third and final apprentice of Darth Sidious, who first appeared in the Star Wars original trilogy, and later in the prequel trilogy. As the Jedi hero Anakin Skywalker, he fought alongside his master Obi-Wan Kenobi during the galaxy-wide Clone Wars, but was slowly seduced to the dark side by Darth Sidious. After helping Sidious kill Jedi Master Mace Windu, he swore allegiance to the Sith and was given the name Darth Vader before setting out to destroy all Jedi left on Coruscant. After being sent by Sidious to assassinate the Separatist council members on Mustafar, Vader was badly injured in a duel with Kenobi, resulting in the loss of his remaining organic arm, both legs, and severe burn injuries. He was saved by Sidious, and encased in a black suit of armor with extensive cybernetics which kept him alive. As the Galactic Empire was established and continued to grow, Vader became the Emperor's immensely feared second-in-command and was given the task of finding surviving Jedi and the Rebel Alliance's base. After the destruction of the first Death Star, Vader was charged with tracking down the Rebel Alliance and destroying their headquarters. However, the actions of his son, Luke Skywalker, eventually turned Vader against his master, resulting in both Sidious' and Vader's deaths, as well as the fulfilment of the Chosen One prophecy.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Plagueis</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Plagueis">
            </figure>
            <p class="storyline">Darth Plagueis was a Muun Dark Lord of the Sith and Darth Sidious' master, first referenced in Star Wars: Episode III - Revenge of the Sith. In the film, Sidious (as Palpatine) uses Plagueis' story to seduce Anakin Skywalker to the dark side, claiming that Plagueis' abilities in the Force grew to such an extent that he could create life by influencing microscopic Force-sensitive entities called "midi-chlorians," and even save people from dying. According to the Rule of Two, Plagueis was eventually killed by Sidious in his sleep, who subsequently became the new Sith Master and would later take on an apprentice of his own.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Bane</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Bane">
            </figure>
            <p class="storyline">Darth Bane (Dessel) was a human Dark Lord of the Sith and the sole survivor of the Sith Order in the aftermath of the ancient war between the Jedi and the Sith. He is best known for establishing the Rule of Two, which was considered the beginning of the modern Sith within the Star Wars canon. This law stated that there must be only two Sith Lords at a time: a master to embody power, and an apprentice to crave it and eventually overthrow his/her master and adopt an apprentice of his/her own. He is the main character of the Darth Bane Trilogy by Drew Karpyshyn, which part of the Legends continuity.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Momin</p>
            <figure class="default-detail-banner">
              <img src="../images/sith1.jpg" alt="Darth Momin">
            </figure>
            <p class="storyline">Darth Momin was a humanoid Dark Lord of Sith who appeared in the comic book Darth Vader: Dark Lord of the Sith and briefly in Lando. Once a sculptor, he was imprisoned at a young age for his creations, which scared most people who saw them. Momin was eventually rescued by a Sith Lady named Shaa, who trained him in the dark side of the Force until he became more powerful than her and killed her. Momin then built a superweapon to destroy a city and perished when the Jedi intervened to stop him, losing control over the energy he wielded and causing his physical body to be destroyed, leaving behind only his mask with his spirit inside. Many years later, the mask was retrieved from the Jedi Archive vault by Darth Sidious, who gave it to Darth Vader as a gift for his journey to Mustafar, which Vader sought to make his personal stronghold. After Momin's spirit killed some of his personnel, Vader examined the mask and learned of Momin's past, before letting him possess the body of a Mustafarian and build a fortress for him. Shortly after Momin finished building of the fortress, Vader was distracted by an invasion of Mustafarians, which Momin took advantage of to open the door to the Dark Side and resurrect himself. However, after challenging Vader to a duel, Momin met a quick demise by being crushed with a giant rock. Despite Momin's death, his dark essence remained in the mask for several more years. At one point, Momin's mask was aboard the Imperial yacht Imperialis, when a group of thieves led by Lando Calrissian attempt to rob the ship. After Momin's spirit possessed the bodies of two thieves, the others were forced to abandon them and blow up the ship, seemingly destroying Momin's mask, and his spirit with it. Luke Skywalker later learned about Momin and his history during his travels across the galaxy, and described the Sith Lord's role in building Vader's fortress in his book, titled The Secrets of the Jedi.</p>
          </div>
        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>