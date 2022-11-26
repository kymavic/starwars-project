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
      <!--#FORCE DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Force</h2>
          <div>
            <p class="detail-subtitle">Telekinesis</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Telekinesis">
            </figure>
            <p class="storyline">Telekinesis is undoubtedly the most commonly used force ability in the Star Wars franchise, with its most iconic depiction seen in Star Wars: The Emperor Strikes Back. While Luke is training, Master Yoda encourages him to lift his X-wing starfighter from beneath the marshy bog water of Dagobah in which it is submerged. He fails to do this and Yoda is forced to do it himself to set an example.</p>
          </div>

          <div>
            <p class="detail-subtitle">Mind Tricks</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Mind Tricks">
            </figure>
            <p class="storyline">Originally used by Obi-Wan Kenobi on a pair of stormtroopers in Star Wars: A New Hope, this ability is ideal for those attempting to talk their way out of situations. Obi-Wan uses this mind trick ability to convince these stormtroopers that C-3PO and R2-D2 are not the droids that the Empire is searching for, getting them out of a tight bind.</p>
          </div>

          <div>
            <p class="detail-subtitle">Force Lightning</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Force Lightning">
            </figure>
            <p class="storyline">First introduced in Star Wars: The Return of the Jedi, force lightning has become a symbol of power and fear throughout the galaxy. It is first seen when the Emperor attempts to kill Luke Skywalker on the Death Star before Darth Vader intervenes. Essentially, it is the ability to conjure electricity in one's hand and project it.</p>
          </div>

          <div>
            <p class="detail-subtitle">Force Drain</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Force Drain">
            </figure>
            <p class="storyline">Force drain is an ability used only once in the theatrical releases of Star Wars. Emperor Palpatine uses this ability on Rey and Ben Solo during the climax of Star Wars: The Rise of Skywalker. Force drain allows its user to drain the life essence from another, making it an extremely powerful ability in terms of offense and defense.</p>
          </div>

          <div>
            <p class="detail-subtitle">Force Sense</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Force Sense">
            </figure>
            <p class="storyline">This ability is perhaps the main reason many Jedi and Sith live long enough to tell their tales. Having first been utilized in Star Wars: A New Hope, it has become one of the most popular skills attributed to a force user.</p>
          </div>

          <div>
            <p class="detail-subtitle">Force Projection</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Force Projection">
            </figure>
            <p class="storyline">The force projection ability was utilized by Luke Skywalker during the Battle of Crait in Star Wars: The Last Jedi. It is an ability that allows its user to convey an image of themselves across the galaxy. It takes tremendous focus to execute but can portray a convincing rendition of its user if done successfully.</p>
          </div>

          <div>
            <p class="detail-subtitle">Mind Probe</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Mind Probe">
            </figure>
            <p class="storyline">Mind probe is an ability used frequently by Kylo Ren in Star Wars: The Force Awakens. It permits its wielder access into a person's mind, allowing them to take any information they want. It is first witnessed when Ren attempts to access Poe Dameron's mind to uncover the location of BB-8, a droid containing the map to Skywalker.</p>
          </div>

          <div>
            <p class="detail-subtitle">Transfer Essence</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Transfer Essence">
            </figure>
            <p class="storyline">The transfer essence ability was first utilized in The Mandalorian. Greef Karga becomes injured and Grogu, in response to noticing this, transfers a portion of his life essence over to him to heal his wound. Since healing this wound required only a small amount of life essence, Grogu falls asleep upon the transferal's completion.</p>
          </div>

          <div>
            <p class="detail-subtitle">The Creation Of Life</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="The Creation Of Life">
            </figure>
            <p class="storyline">Though only briefly touched upon in Star Wars: Revenge of the Sith, the ability to create life is undoubtedly one of the most powerful force abilities to appear in the series. Darth Plaguis the Wise, before his betrayal at the hands of his apprentice Shiv Palpatine, mastered this ability and supposedly used it to create Anakin Skywalker.</p>
          </div>

          <div>
            <p class="detail-subtitle">Thought Bomb</p>
            <figure class="default-detail-banner">
              <img src="../images/force1.jpg" alt="Thought Bomb">
            </figure>
            <p class="storyline">Without question, the most powerful force ability present in Star Wars is the thought bomb. It is created through an ancient Sith ritual where the Sith combine their dark side powers. If done successfully, the thought bomb can destroy all force-sensitive beings unfortunate enough to be within the trajectory of its blast.</p>
          </div>

        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>