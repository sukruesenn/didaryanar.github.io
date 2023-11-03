<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Didar Yanar Akademi | Ana Sayfa</title>
</head>
<body class="page education-detail title-center footer-dark">
    <?php include 'includes/header-light.php'; ?>

    <main class="position-relative">
        <?php include 'includes/sections/education-hero-section.php'; ?>
        
        <?php include 'includes/sections/educations.php'; ?>

        <?php include 'includes/sections/black-radius.php'; ?>
        
        <?php include 'includes/mobile-nav-overlay.php'; ?>
    </main>

    <?php include 'includes/footer-dark.php'; ?>
    
    <?php include 'includes/js.php'; ?>

    <script>
        $('.comment-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 2.5
                }
            }
        });

        $('.prev-btn-wrapper').click(function() {
            $('.comment-carousel').trigger('prev.owl.carousel');
        });

        $('.next-btn-wrapper').click(function() {
            $('.comment-carousel').trigger('next.owl.carousel');
        });

        $('.edu-carousel').owlCarousel({
            loop: true,
            margin: 35,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
            dots: false,
            responsive:{
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 3
                }
            }
        });
    </script>
    
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="js/btnAnimation.js"></script>
</body>
</html>