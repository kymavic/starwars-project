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
    <?php include('./pages/sections/libraries.php'); ?>        
</head>

<body>

    <!--Header-->
    <?php include('./pages/sections/header.php'); ?>
    <!--main Content-->
    <main>
        <article>
            <!--HERO-->
            <section class="hero">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="h1 hero-title">
                        MAY THE FORCE BE WITH YOU
                        </h1>
                        <button class="btn btn-primary">
                            <ion-icon name="play"></ion-icon>
                            <span>Sign up</span>
                        </button>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <!--Footer-->
    <?php include('./pages/sections/footer.php'); ?>
</body>
</html>