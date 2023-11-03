<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Didar Yanar Akademi | Ana Sayfa</title>
</head>
<body class="page education-detail chef-detail footer-dark light-faq">
    <?php include 'includes/header-dark.php'; ?>

    <main class="position-relative">
        <?php include 'includes/sections/chef-detay/video-section.php'; ?>

        <?php include 'includes/sections/chef-detay/chef-about-section.php'; ?>

        <?php include 'includes/sections/chef-detay/education-carousel-section.php'; ?>

        <?php include 'includes/sections/chef-detay/price-section-light.php'; ?>
        
        <?php include 'includes/sections/student-comments.php'; ?>

        <?php include 'includes/sections/faq.php'; ?>

        <?php include 'includes/sections/chef-detay/chef-pagination-section.php'; ?>

        <?php include 'includes/sections/black-radius.php'; ?>

        <?php include 'includes/mobile-nav-overlay.php'; ?>
    </main>

    <?php include 'includes/footer-dark.php'; ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>

    <script src="js/wow/wow.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('.play-video-btn').on('click', function(){
                $('.video-popup').fadeIn('slow');
                return false;
            });
            
            $('.popup-bg').on('click', function(){
                $('.video-popup').slideUp('slow');
                return false;
            });
            
            $('.close-btn').on('click', function(){
                $('.video-popup').fadeOut('slow');
                return false;
            });
            
        });

        $('.educations-carousel').owlCarousel({
            loop: true,
            margin: 25,
            nav: false,
            dots: true,
            center: true,
            responsive:{
                0:{
                    items: 1
                },
                390:{
                    items: 2
                },
                600:{
                    items: 3
                }
            }
        });

        $('.comment-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            responsive:{
                0:{
                    items: 1
                },
                768:{
                    items: 1.5
                },
                1025:{
                    items: 2
                },
                1151:{
                    items: 2.2
                },
                1281:{
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
    </script>

    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="js/btnAnimation.js"></script>
</body>
</html>