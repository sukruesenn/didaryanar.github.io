<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Didar Yanar Akademi | Ana Sayfa</title>
</head>
<body class="page education-detail edu-document title-center">
    <?php include 'includes/header-light.php'; ?>

    <main class="position-relative">
        <?php include 'includes/sections/education-hero-section.php'; ?>

        <?php include 'includes/sections/education-details/education-videos-listing.php'; ?>
        
        <?php include 'includes/sections/education-details/education-about.php'; ?>

        <?php include 'includes/sections/education-details/education-documents.php'; ?>

        <?php include 'includes/sections/education-details/education-banner.php'; ?>

        <?php include 'includes/sections/price-section.php'; ?>

        <?php include 'includes/sections/student-comments.php'; ?>
        
        <?php include 'includes/sections/faq.php'; ?>

        <?php include 'includes/sections/white-radius.php'; ?>
    </main>


    <?php include 'includes/footer-light.php'; ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
    <script src="js/wow/wow.min.js"></script>

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