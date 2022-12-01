<header class="header" data-header>
    <div class="container">
        <div class="overlay" data-overlay></div>
        <a href="../../index.php" class="logo">
            <img src="../images/logo.svg" alt="Star Wars logo">
        </a>
        <div class="header-actions">
            <div class="lang-wrapper">
            </div>
            <?php if (!array_key_exists('validate', $_SESSION) || !$_SESSION['validate']!=true) {
                echo '<a class="btn btn-primary" href="../../pages/login.php">Sign in</a>';
            } else {
                echo '<a class="btn btn-primary" href="../../pages/logout.php">' . $_SESSION['username'] . ' - Log out</a>';
            } ?>
        </div>
        <button class="menu-open-btn" data-menu-open-btn>
            <ion-icon name="reorder-two"></ion-icon>
        </button>
        <nav class="navbar" data-navbar>
            <div class="navbar-top">
                <a href="../../index.php" class="logo">
                    <img src="../images/logo.svg" alt="Star Wars Logo">
                </a>
                <?php if (!array_key_exists('validate', $_SESSION) || !$_SESSION['validate']!=true) {
                    echo '<a class="menu-close-btn" href="../../pages/login.php"><ion-icon name="log-in-outline"></ion-icon></a>';
                } else {
                    echo '<a class="menu-close-btn" href="../../pages/logout.php"><ion-icon name="log-out-outline"></ion-icon></a>';
                } ?>
                <button class="menu-close-btn" data-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>

            </div>
            <ul class="navbar-list">
                <li>
                    <a href="../../index.php" class="navbar-link">Home</a>
                </li>
                <li>
                    <a href="../../pages/movies.php" class="navbar-link">Movies</a>
                </li>
                <li>
                    <a href="../../pages/characters.php" class="navbar-link">Characters</a>
                </li>
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">Categories
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                        <li> <a href="../../pages/ships.php" class="navbar-link">Ships</a></li>
                        <li> <a href="../../pages/planets.php" class="navbar-link">Planets</a></li>
                        <li> <a href="../../pages/forces.php" class="navbar-link">Force</a></li>
                        <li> <a href="../../pages/aliens.php" class="navbar-link">Aliens</a></li>
                    </div>
                </div>
                <li>
                    <a href="#" class="navbar-link">Forums</a>
                </li>
                <?php if (array_key_exists('validate', $_SESSION) && $_SESSION['validate']==true) {
                    echo '<li><a href="../../pages/dashboard.php" class="navbar-link">Dashboard</a></li>';
                } ?>
            </ul>
            <ul class="navbar-social-list">
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="navbar-social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>