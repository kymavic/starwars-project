<?php
session_start();
include_once('../functions/function.php');
$dbConnect = dbLink();
if ($dbConnect) echo '<!-- Connection Stablished -->';
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
      <!--main Content-->
      <section class="movies">
        <div class="container">
          <h2 class="h2 section-title">Movies</h2>

          <ul class="movies-list">
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BOTA5NjhiOTAtZWM0ZC00MWNhLThiMzEtZDFkOTk2OTU1ZDJkXkEyXkFqcGdeQXVyMTA4NDI1NTQx._V1_FMjpg_UY720_.jpg" alt="Star Wars: Episode IV - A New Hope">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode IV - A New Hope</h3>
                  <time datetime="1977">1977</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT121M">121 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>8.6</data>
                  </div>
                </div>
                <p class="movie-description">
                  Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_FMjpg_UY720_.jpg" alt="Star Wars: Episode V - The Empire Strikes Back">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode V - The Empire Strikes Back</h3>
                  <time datetime="1980">1980</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT124M">124 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>8.7</data>
                  </div>
                </div>
                <p class="movie-description">
                  After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued across the galaxy by Darth Vader and bounty hunter Boba Fett.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BOWZlMjFiYzgtMTUzNC00Y2IzLTk1NTMtZmNhMTczNTk0ODk1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UX380_CR0,13,380,562_.jpg" alt="Star Wars: Episode VI - Return of the Jedi">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode VI - Return of the Jedi</h3>
                  <time datetime="1983">1983</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT131M">131 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>8.3</data>
                  </div>
                </div>
                <p class="movie-description">
                  After a daring mission to rescue Han Solo from Jabba the Hutt, the Rebels dispatch to Endor to destroy the second Death Star. Meanwhile, Luke struggles to help Darth Vader back from the dark side without falling into the Emperor's trap.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BYTRhNjcwNWQtMGJmMi00NmQyLWE2YzItODVmMTdjNWI0ZDA2XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_QL75_UX380_CR0,4,380,562_.jpg" alt="Star Wars: Episode I - The Phantom Menace">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode I - The Phantom Menace</h3>
                  <time datetime="1999">1999</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT136M">136 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>6.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Two Jedi escape a hostile blockade to find allies and come across a young boy who may bring balance to the Force, but the long dormant Sith resurface to claim their original glory.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BMDAzM2M0Y2UtZjRmZi00MzVlLTg4MjEtOTE3NzU5ZDVlMTU5XkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_QL75_UX380_CR0,7,380,562_.jpg" alt="Star Wars: Episode II - Attack of the Clones">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode II - Attack of the Clones</h3>
                  <time datetime="2002">2002</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT142M">142 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>6.6</data>
                  </div>
                </div>
                <p class="movie-description">
                  Ten years after initially meeting, Anakin Skywalker shares a forbidden romance with Padmé Amidala, while Obi-Wan Kenobi investigates an assassination attempt on the senator and discovers a secret clone army crafted for the Jedi.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_QL75_UY562_CR21,0,380,562_.jpg" alt="Star Wars: Episode III - Revenge of the Sith">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode III - Revenge of the Sith</h3>
                  <time datetime="2005">2005</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT140M">140 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>7.6</data>
                  </div>
                </div>
                <p class="movie-description">
                  Three years into the Clone Wars, the Jedi rescue Palpatine from Count Dooku. As Obi-Wan pursues a new threat, Anakin acts as a double agent between the Jedi Council and Palpatine and is lured into a sinister plan to rule the galaxy.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_QL75_UY562_CR1,0,380,562_.jpg" alt="Star Wars: Episode VII - The Force Awakens">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode VII - The Force Awakens</h3>
                  <time datetime="2015">2015</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT138M">138 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>7.8</data>
                  </div>
                </div>
                <p class="movie-description">
                  As a new threat to the galaxy rises, Rey, a desert scavenger, and Finn, an ex-stormtrooper, must join Han Solo and Chewbacca to search for the one hope of restoring peace.
                </p>
              </div>
            </li>
            <li>
              <div class="movie-card">
                <figure class="card-banner">
                  <img src="https://m.media-amazon.com/images/M/MV5BMjQ1MzcxNjg4N15BMl5BanBnXkFtZTgwNzgwMjY4MzI@._V1_QL75_UX380_CR0,0,380,562_.jpg" alt="Star Wars: Episode VIII - The Last Jedi">
                </figure>
                <div class="title-wrapper">
                  <h3 class="card-title">Star Wars: Episode VIII - The Last Jedi</h3>
                  <time datetime="2017">2017</time>
                </div>
                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>
                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>
                    <time datetime="PT152M">152 min.</time>
                  </div>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <data>6.9</data>
                  </div>
                </div>
                <p class="movie-description">
                  The Star Wars saga continues as new heroes and galactic legends go on an epic adventure, unlocking mysteries of the Force and shocking revelations of the past.
                </p>
              </div>
            </li>
          </ul>

        </div>
      </section>
    </article>
  </main>
  <!--Footer-->
  <?php include('./sections/footer.php'); ?>
</body>

</html>