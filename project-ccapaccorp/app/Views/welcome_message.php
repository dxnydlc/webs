
<?= $this->extend('layouts/principal') ?>



<!-- ************************************************** -->
<?= $this->section('titulo') ?>
Inicio
<?= $this->endSection() ?>
<!-- ************************************************** -->


<!-- ************************************************** -->
<?= $this->section('header-class') ?>
main-header
<?= $this->endSection() ?>
<!-- ************************************************** -->



<!-- ************************************************** -->
<?= $this->section('header') ?>
CcapaCcorp
<?= $this->endSection() ?>
<!-- ************************************************** -->





<?= $this->section('los_css') ?>

<style>
    .owl-dots{
        bottom: 180px !important;
    }
    @media (max-width: 575px) {
        .main-menu__logo{
            max-width : 100% !important;
        }
    }
</style>

<?= $this->endSection() ?>
<!-- ************************************************** -->



<!-- ************************************************** -->
<?= $this->section('content') ?>

<!-- ============================================================== -->


<div class="stricky-header stricked-menu main-menu main-menu-with-bg">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="main-slider__one eduact-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"smartSpeed": 1000, 
        "autoplay": false, 
        "autoplayTimeout": 7000, 
		"autoplayHoverPause": true,
		"nav": false,
		"dots": true,
		"margin": 0
	    }'>
                <!-- slider-item-start -->
                <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div><!-- slider-image-->
                        
                            
                        <!-- slider-shape-1 -->
                        
                        <!-- slider-shape-2 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Guías de Remisión electrónicas </h2><!-- slider-title -->
                                        <p class="main-slider__text">Expositora: Rina Rimachi Castañeda<br/>Martes 9 de julio.</p><!-- slider-text -->
                                        <!-- slider-text -->
                                        <div class="main-slider__btn">
                                            <a href="<?= esc($APP_URL) ?>curso/02/Guias-de-Remision-electronicas" class="eduact-btn eduact-btn-second">
                                                <span class="eduact-btn__curve"></span>Ver seminario<i class="icon-arrow"></i>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/curso-banner-04.jpeg" alt="eduact">
                                        </div>
                                        
                                    </div>
                                    <!-- slider-shape-3 -->
                                    <!-- slider-shape-4 -->
                                    <!-- slider-shape-5 -->
                                    <!-- slider-shape-6 -->
                                    <!-- slider-shape-6 -->
                                    <!-- slider-shape-6 -->
                                    <div class="main-slider__shape-nine">
                                        <img src="assets/images/shapes/slider-shape-9.png" alt="eduact" />
                                    </div><!-- slider-shape-6 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- slider-item-end -->
                <!-- slider-item-end -->

                <!-- slider-item-start -->
                <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div><!-- slider-image-->
                        <!-- slider-shape-1 -->
                        <!-- slider-shape-2 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >¿Sabes cómo afrontar exitosamente una inspección de SUNAFIL?</h2><!-- slider-title -->
                                        <p class="main-slider__text">Expositor: César Puntriano Rosas<br/>Martes 16 de julio.</p><!-- slider-text -->
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>curso/01/Sabes-como-afrontar-exitosamente-una-inspeccion-de-SUNAFIL" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver seminario<i class="icon-arrow"></i>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/Expositor-01.jpeg" alt="eduact" class=" img-fluid img-resposive " />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <!-- slider-shape-3 -->
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-item-end -->



                <!-- slider-item-start -->
                <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div><!-- slider-image-->
                        <!-- slider-shape-1 -->
                        <!-- slider-shape-2 -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 ">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Última información sobre pago de gratificaciones de julio 2024</h2><!-- slider-title -->
                                        <!-- <p class="main-slider__text">Expositor: César Puntriano Rosas<br/>Martes 16 de julio.</p> -->
                                        <!-- slider-text -->
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>capatips/01/ultima-informacion-sobre-gratificaciones-de-julio-2024" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver información<i class="icon-arrow"></i>
                                            </a><!-- /.btn -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 " style="position:relative111;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/logo-grati-01.png" alt="eduact" class=" img-fluid img-resposive " style="max-width: 500px;" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <!-- slider-shape-3 -->
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-item-end -->



            </div>
        </section>
        <!--Main Slider End-->
        <!-- About Start -->

        <!-- About End -->
        <!-- Service Start -->
        <section class="service-three" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInLeft" data-wow-delay="100ms">
                            <br/>
                            <h5 class="section-title__tagline" style="font-size: 56px;color: #3176c1;margin-bottom: 30px;" >
                                CcapaCcorp
                            </h5>
                            
                            <h3 class="section-title__title" style="color: #ecb069;font-size: 30px;line-height: 30px;" >
                                Centro de Capacitación & Competencias Corporativas
                            </h3>
                            
                        </div><!-- section-title -->
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="100ms">
                        <p class="service-three__section-text" style="text-align: justify;font-size: 20px;" >
                        Tiene como objetivo ampliar y fortalecer los conocimientos, aptitudes y habilidades de los profesionales que se desenvuelven diariamente en las empresas, brindándoles herramientas acordes a sus necesidades, para que logren un desempeño laboral exitoso y logren los objetivos institucionales.
                        <br/>
                        En ese sentido, los lineamientos para desarrollar nuestras capacitaciones están sostenidos en nuestro compromiso y seriedad de brindarle a nuestros clientes alternativas de solución prácticas acorde con el marco legal y por supuesto, respaldados por los amplios conocimientos y experiencia de nuestros expositores.
                        </p>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Service End -->
        <!-- Video Start -->
        
        <!-- Video End -->
        <!-- Counter Start -->
        
        <!-- Counter End -->
        <!-- Course Start -->
<!-- background-image: url(assets/images/shapes/course-bg-3.png);padding: 44px 0 85px; -->
        <section class="course-three" style="" >
            <div class="container">
                <div class="section-title wow fadeInUp text-center" data-wow-delay="100ms">
                    
                    <h2 class="section-title__title">Seminarios del mes de julio</h2>
                </div><!-- section-title -->
                <div class="row">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="course-three__item">
                            <div class="course-three__thumb">
                                <img src="2024/curso-banner-02.jpeg" alt="eduact">
                            </div><!-- /.course-thumb -->
                            <div class="course-three__content">
                                <div class="course-three__time">Seminario on-line</div>
                                
                                <h3 class="course-three__title">
                                    <a href="<?= esc($APP_URL) ?>curso/01/Sabes-como-afrontar-exitosamente-una-inspeccion-de-SUNAFIL" >¿Sabes cómo afrontar exitosamente una inspección de SUNAFIL?</a>
                                </h3>

                                <div class="course-three__bottom">
                                    <div class="course-three__author">
                                        <h5 class="course-three__author__name">Martes 16 de julio</h5>
                                        <p class="course-three__author__designation" style="text-transform: none;" >De 7:00 p.m. a 10:00 p.m.</p>
                                    </div>
                                </div>
                                
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-two -->
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="course-three__item">
                            <div class="course-three__thumb">
                                <img src="/2024/curso-banner-04.jpeg" alt="eduact">
                            </div><!-- /.course-thumb -->
                            <div class="course-three__content">
                                <div class="course-three__time">Seminario on-line</div>
                                
                                <h3 class="course-three__title">
                                    <a href="<?= esc($APP_URL) ?>curso/02/Guias-de-Remision-electronicas" >Guías de Remisión Electrónicas</a>
                                </h3>
                                <div class="course-three__bottom">
                                    <div class="course-three__author">
                                        <h5 class="course-three__author__name">Martes 09 de julio</h5>
                                        <p class="course-three__author__designation" style="text-transform: none;" >De 7:00 p.m. a 10:00 p.m.</p>
                                    </div>
                                </div>
                            </div><!-- /.course-content -->
                        </div><!-- /.course-card-two -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Course End -->
        <!-- Category Start -->
        
        <!-- Category End -->
        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->
        <!-- Team Start -->
        <section class="team-three" style="padding: 50px 0 85px;" >
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                    
                    <h2 class="section-title__title">Conoce a nuestros expositores</h2>
                </div><!-- section-title -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/Expositor-01-416-551.png" alt="eduact">
                            </div><!-- /.team-image -->
                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/01/cesar-puntriano-rosas">César Puntriano Rosas</a>
                                </h3><!-- /.team-name -->
                                <!-- /.team-designation -->
                                <!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-three -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/no-user-02.png" alt="eduact">
                            </div><!-- /.team-image -->
                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/03/rina-rimachi-castaneda">Rina Rimachi Castañeda</a>
                                </h3><!-- /.team-name -->
                                <!-- /.team-designation -->
                                <!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-three -->
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/Jonathan-Criollo-Rodriguez-01.png" alt="eduact">
                            </div><!-- /.team-image -->
                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/02/jonathan-criollo-rodriguez">Jonathan Criollo Rodríguez</a>
                                </h3><!-- /.team-name -->
                                <!-- /.team-designation -->
                                <!-- /.team-social -->
                            </div><!-- /.team-content -->
                        </div><!-- /.team-three -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Team End -->
        <!-- Blog Start -->
        
        <!-- Blog End -->
        <!-- /.client-carousel -->
        <!-- Call To Action Start -->
        
        <!-- Call To Action End -->


<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->

