<nav class="mobile-nav" id="mobileNav">
    <div class="mobile-nav-wrapper">
        <div class="mobile-nav-header">
            <div class="header-logo">
                <a href="index.php">
                    <img src="images/header/logo-black.svg" alt="Didar Yanar Akademi">
                </a>
            </div>
        </div>
        <div class="mobile-nav-content">
            <?php include 'includes/nav-menu.php'; ?>
            <a href="#" class="nav-item login-btn login-btn-black wow fadeIn" data-wow-delay=".6s">
                <img src="images/header/lock-2.svg" alt="Lock">
                Öğrenci Girişi
            </a>
        </div>
        <div class="mobile-nav-footer">
            <a href="#">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-regular fa-envelope"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
    </div>
</nav>

<header>
    <div class="container">
        <nav class="nav d-flex align-items-center">
            <div class="logo-wrapper wow fadeIn" data-wow-delay=".1s">
                <a href="index.php">
                    <img id="defaultLogo" src="images/header/logo-black.svg" alt="Logo">
                    <img id="logo-black" src="images/header/logo-black.svg" alt="Logo">
                </a>
            </div>

            <div class="hamburger" id="menuBtn">
                <span class="line black"></span>
                <span class="line black"></span>
                <span class="line black"></span>
            </div>
            
            <div class="menu-wrapper black-menu-wrapper d-flex align-items-center">
                <?php include 'includes/header-menu.php'; ?>
                <a href="#" class="menu-item login-btn wow fadeIn login-btn-black" data-wow-delay=".6s">
                    <img src="images/header/lock-2.svg" alt="Lock">
                    Öğrenci Girişi
                </a>
            </div>
        </nav>
    </div>
</header>