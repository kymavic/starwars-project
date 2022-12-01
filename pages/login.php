<?php
session_start();
global $msg;

if (array_key_exists('validate', $_SESSION) && $_SESSION['validate']==true) {
    header("Location: dashboard.php");
} else {
    if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
        include_once('../functions/function.php');
        $dbConnect = dbLink();
        //if ($dbConnect) echo '<!-- Connection Stablished -->';
        if (!validate($dbConnect, $_POST['username'], $_POST['password'])) {
            $msg = ("<p class='error-msg'>Username or password incorrect!</p>");
        }else{
            header("Location: login.php");
        }
    }
}
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
            <section class="movies">
                <div class="container content-center">
                    <form id="login" method="post" class="form-content" action="login.php">
                        <label class="detail-subtitle">User Name</label>
                        <input type="text" class="login-input" name="username" id="username" placeholder="Username" />
                        <br>
                        <label class="detail-subtitle">Password</label>
                        <input type="Password" class="login-input" name="password" id="password" placeholder="Password" />
                        <br>
                        <div class="inline-center">
                            <button class="w-100 btn btn-lg btn-primary" type="submit" value="login">Login</button>
                        </div>
                        <br>
                        <?php echo $msg; ?>
                    </form>
                </div>
            </section>
        </article>
    </main>
    <!--Footer-->
    <?php include('./sections/footer.php'); ?>
</body>

</html>