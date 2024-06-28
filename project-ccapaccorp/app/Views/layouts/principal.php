<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $this->renderSection('titulo') ?> | <?= $this->renderSection('header') ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= esc($APP_URL) ?>assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?= esc($APP_URL) ?>assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?= esc($APP_URL) ?>assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?= esc($APP_URL) ?>assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Eduact HTML Template For Educaton & LMS" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Water+Brush&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/eduact-icons/style.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/owl-carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/vendors/owl-carousel/assets/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?= esc($APP_URL) ?>assets/css/eduact.css" />

    <script>
        var _URL_HOME = '<?= esc($APP_URL) ?>';
    </script>

    <!-- LOS CSS -->
    <?= $this->renderSection('los_css') ?>
    <!-- ./LOS CSS -->

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(<?= esc($APP_URL) ?>assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        
        <?= $this->include('layouts/header') ?>
        <!-- /.main-header -->



        <?= $this->renderSection('content') ?>

        

        <?= $this->include('layouts/footer') ?>
        <!-- /.main-footer-two -->

        <section class="copyright text-center">
            <div class="container wow fadeInUp" data-wow-delay="400ms">
                <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> | Eduact HTML Template. All Rights Reserved</p>
            </div><!-- /.container -->
        </section><!-- /.copyright -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="<?= esc($APP_URL) ?>assets/images/logo-light.png" width="183" height="48" alt="eduact" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9236809850">+92 (3680) - 9850</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" class="eduact-btn"><span class="eduact-btn__curve"></span><i class="icon-Search"></i></button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->


    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/wow/wow.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/isotope/isotope.js"></script>
    <script src="<?= esc($APP_URL) ?>assets/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="<?= esc($APP_URL) ?>assets/js/eduact.js"></script>
</body>

</html>