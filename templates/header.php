<header>
    <!--НАВИГАЦИЯ ПО САЙТУ-->
    <div class="header-div container-forheader-forfooter">
        <img src="img/logo.png" class="logo-img">
        <nav>
            <ul class="nav-ul">
                <li class="nav-li"><a href="index.php"
                        class="nav-a <?= (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">ГЛАВНАЯ</a>
                </li>
                <li class="nav-li"><a href="catalog.php"
                        class="nav-a <?= (basename($_SERVER['PHP_SELF']) == 'catalog.php') ? 'active' : ''; ?>">КАТАЛОГ</a>
                </li>
                <li class="nav-li"><a href="carfinder.php"
                        class="nav-a <?= (basename($_SERVER['PHP_SELF']) == 'carfinder.php') ? 'active' : ''; ?>">ПОДБОР
                        АВТОМОБИЛЯ</a></li>
                <li class="nav-li"><a href="about.php"
                        class="nav-a <?= (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">О НАС</a>
                </li>
            </ul>
        </nav>
        <a <?php if($_COOKIE['id_user'] == ""): ?> href="auto.php" <?php else: ?> href="user.php" <?php endif; ?>><img
                src="img/user.png" class="user-img"></a>
    </div>
</header>