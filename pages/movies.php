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
      <!--main Content-->
      <section class="movies">
        <div class="container">
          <h2 class="h2 section-title">Best Star Wars Movies</h2>

          <ul class="movies-list">


            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=1">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 1">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 1</h3>
                  </a>

                  <time datetime="1988">1988</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT60M">60 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>9.2</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=2">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 2">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 2</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=3">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 3">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 3</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=4">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 4">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 4</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=5">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 5">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 5</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=6">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 6">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 6</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=7">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 7">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 7</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
                </p>
              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="../pages/movie-details.php?id=8">
                  <figure class="card-banner">
                    <img src="../images/moviex.jpg" alt="Movie 8">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="#">
                    <h3 class="card-title">Movie 8</h3>
                  </a>

                  <time datetime="2022">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">47 min.</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.5</data>
                  </div>
                </div>
                <p class="movie-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis perferendis iusto impedit voluptatem, excepturi quidem magni consequatur ab libero expedita placeat eius explicabo eaque qui harum modi consectetur sint adipisci!
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