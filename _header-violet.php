
<?php if(!isset($_SESSION['login']) || $_SESSION['login'] == false) : ?>
    <!-- ======= Header ======= -->
    <header id="header" class="header-violet fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo-white.png" alt="">
        </a>

        <nav id="navbar" class="navbar">
        <ul>
            <li><a href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
    </header><!-- End Header -->
<?php else : ?>
    <!-- ======= Header ======= -->
    <header id="header" class="header-violet fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo-white.png" alt="">
        </a>

        <nav id="navbar" class="navbar">
        <ul>
            <li><a href="cart.php" class="cart"><i style="font-size: 1.5rem !important;" class="bi bi-cart-fill"></i></a></li>
            <li><a href="purchase.php">My Purchases</a></li>
            <li><a href="profile.php">My Account</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
    </header><!-- End Header -->
<?php endif; ?>