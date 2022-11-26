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
      <!--#DETAIL-->
      <section class="default-detail">
        <div class="section-container">
          <h2 class="h2 section-title">Primary Characters</h2>

          <div>
            <p class="detail-subtitle">Luke Skywalker</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png" alt="Luke Skywalker">
            </figure>
            <p class="storyline"> Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.</p>
          </div>

          <div>
            <p class="detail-subtitle">Leia Skywalker</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/1/1b/Princess_Leia%27s_characteristic_hairstyle.jpg" alt="Leia Skywalker">
            </figure>
            <p class="storyline">Leia is princess of the planet Alderaan, a member of the Imperial Senate and an agent of the Rebel Alliance. She thwarts the sinister Sith Lord Darth Vader and helps bring about the destruction of the Empire's cataclysmic superweapon, the Death Star.</p>
          </div>

          <div>
            <p class="detail-subtitle">Yoda</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/9/9b/Yoda_Empire_Strikes_Back.png" alt="Yoda">
            </figure>
            <p class="storyline">He is a small, green humanoid alien who is powerful with the Force and is a leading member of the Jedi Order until its near annihilation.</p>
          </div>

          <div>
            <p class="detail-subtitle">Darth Vader</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/0/0b/Darth_Vader_in_The_Empire_Strikes_Back.jpg" alt="Anakin Skywalker (Darth Vader)">
            </figure>
            <p class="storyline">The character is the central antagonist of the original trilogy and, as Anakin Skywalker, is one of the main protagonists throughout the prequel trilogy.</p>
          </div>

          <div>
            <p class="detail-subtitle">Han Solo</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/b/be/Han_Solo_depicted_in_promotional_image_for_Star_Wars_%281977%29.jpg" alt="Han Solo">
            </figure>
            <p class="storyline">Han Solo and his first mate Chewbacca are smugglers who are hired by Ben Kenobi and Luke Skywalker to transport them to Alderaan so they can deliver the stolen plans for the Death Star.</p>
          </div>

          <div>
            <p class="detail-subtitle">Chewbacca</p>
            <figure class="default-detail-banner">
              <img src="https://upload.wikimedia.org/wikipedia/en/1/12/Chewbaca_%28Peter_Mayhew%29.png" alt="Chewbacca">
            </figure>
            <p class="storyline">He is a Wookiee, a tall, hirsute, bipedal, intelligent species originating from the fictional planet of Kashyyyk. Chewbacca is the loyal friend and first mate of Han Solo, and serves as co-pilot on Solo's spaceship, the Millennium Falcon; together they help the Rebel Alliance defeat the Galactic Empire and restore freedom to the galaxy.</p>
          </div>
        </div>
      </section>

    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>