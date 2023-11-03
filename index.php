<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Didar Yanar Akademi | Ana Sayfa</title>
</head>
<body>
    <?php include 'includes/header-light.php'; ?>

    <main>
        <?php include 'includes/sections/index-slider.php'; ?>
        
        <?php include 'includes/sections/reverse-edu-carousel.php'; ?>

        <?php include 'includes/sections/document-section.php'; ?>
        
        <?php include 'includes/sections/highlights-slider-section.php'; ?>

        <?php include 'includes/sections/faq.php'; ?>

        <?php include 'includes/sections/white-radius.php'; ?>

        <?php include 'includes/mobile-nav-overlay.php'; ?>
    </main>

    <?php include 'includes/footer-light.php'; ?>

    <!-- JS -->
    <?php include 'includes/js.php'; ?>

    <!-- Owl Settings -->
    <script>
        $(".education-carousel-1").slick({
            slidesToShow: 5,
            dots: false,
            centerMode: true,
            arrows: false,
            rtl: true,
            infinite: true,
            asNavFor: '.education-carousel-2',
            responsive: [
                {
                    breakpoint: 1441,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1201,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $(".education-carousel-2").slick({
            slidesToShow: 4,
            infinite: false,
            centerMode: true,
            arrows: false,
            dots: true,
            infinite: true,
            asNavFor: '.education-carousel-1',
            responsive: [
                {
                    breakpoint: 1201,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>

    <script>
        $('.home-carousel').owlCarousel({
            loop: false,
            smartSpeed: 450,
            nav: false,
            responsive:{
                0:{
                    items: 1,
                    center: true,
                    margin: 115,
                    stagePadding: 120
                },
                280:{
                    items: 1,
                    center: true,
                    margin: 150,
                    stagePadding: 55
                },
                335:{
                    items: 1,
                    center: true,
                    margin: 140,
                    stagePadding: 75
                },
                360:{
                    items: 1,
                    center: true,
                    margin: 140,
                    stagePadding: 80
                },
                390:{
                    items: 1,
                    center: true,
                    margin: 140,
                    stagePadding: 90
                },
                425:{
                    items: 1,
                    center: true,
                    margin: 130,
                    stagePadding: 105
                },
                450:{
                    items: 1,
                    center: true,
                    margin: 100,
                    stagePadding: 100
                },
                560:{
                    items: 1,
                    center: true,
                    loop: true,
                    margin: 100,
                    stagePadding: 150
                },
                600:{
                    items: 2,
                    margin: 50,
                    stagePadding: 50
                },
                700:{
                    items: 2,
                    margin: 80,
                    stagePadding: 80
                },
                768:{
                    items: 2,
                    margin: 100,
                    stagePadding: 100
                },
                1000:{
                    items: 3,
                    margin: 50,
                    stagePadding: 50
                },
                1150:{
                    items: 4,
                    margin: 30
                },
                1280:{
                    items: 4,
                    margin: 75
                }
            }
        });

        $('.highlights-carousel-main').owlCarousel({
            loop: true,
            nav: false,
            smartSpeed: 450,
            dots: true,
            margin: 50,
            responsive:{
                0:{
                    items: 1
                }
            }
        });

        $('.highlights-inner-carousel').owlCarousel({
            loop: true,
            smartSpeed: 450,
            margin: 35,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
            dots: false,
            responsive:{
                0:{
                    items: 1
                },
                480:{
                    items: 2
                },
                600:{
                    items: 3
                }
            }
        });
    </script>
</body>
</html>