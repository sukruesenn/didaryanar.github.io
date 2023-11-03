<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Didar Yanar Akademi | Kurumsal</title>
</head>
<body class="page footer-dark contact-page">
    <?php include 'includes/header-dark.php'; ?>

    <main>
        <section class="position-relative section contact-area section-bottom">
            <div class="container">
                <h1 class="wow fadeInDown" data-wow-delay=".3s">İletişim Bilgileri</h1>
                <div class="row info-row">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-box">
                            <div class="box-icon">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <div class="box-info">
                                <span>Telefon</span>
                                <a href="tel:0535 055 70 90">0535 055 70 90</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-box">
                            <div class="box-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="box-info">
                                <span>Adres</span>
                                <a href="#" class="address">Şerifali Mah. Hendem Cad. Zöhre Apt No:13/B Ümraniye, istanbul</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-box">
                            <div class="box-icon">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                            </div>
                            <div class="box-info">
                                <span>E-Posta</span>
                                <a href="mailto:info@didaryanarakademi.com">info@didaryanarakademi.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gmap">
                <div class="location-img">
                    <img src="images/location/location-map.svg">
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6022.1978448414375!2d29.146422778096372!3d41.001207981829914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2str!4v1698942152272!5m2!1sen!2str" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    
            <div class="form-wrapper">
                <form action="">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Adınız Soyadınız" required>
                            <input type="tel" placeholder="Telefon" required>
                            <input type="email" placeholder="E-Posta" required>
                        </div>
                        
                        <div class="col-sm-6">
                            <input type="text" placeholder="Konu Seçiniz" required>
                            <textarea name="" id="" placeholder="Mesajınız"></textarea>
                            <button class="btn-classic black-btn">Gönder</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mobile-nav-overlay" id="mobileNavOverlay"></div>
        </section>
        <?php include 'includes/sections/black-radius.php'; ?>
        <?php include 'includes/mobile-nav-overlay.php'; ?>
    </main>

    <?php include 'includes/footer-dark.php'; ?>

    <?php include 'includes/js.php'; ?>
</body>
</html>