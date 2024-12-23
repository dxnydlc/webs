
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
    .rowBoton1{
        margin-top:-170px;
    }
    .rowBoton2{
        margin-top:-140px;
    }
    .wrapperBanner01{
        position:relative;
        min-height: 800px;
    }
    .wrapperBanner02{
        position:relative;
        min-height: 800px;
    }
    @media only screen and (max-width: 600px) {
        .rowBoton1{
            margin-top: -50px;
        }
        .rowBoton2{
            margin-top: -32px;
        }
        .wrapperBanner01{
            min-height: 180px;
        }
        .wrapperBanner02{
            min-height: 180px;
        }
        .btnInfoC{
            background-color: #f77f00 !important;
            border : 1px #fcbf49 solid !important;
            padding: 2px !important;
        }
        .btnBanner1{
            display: block;
            float: right;
            margin-right: 2px;
        }
    }
</style>

<?= $this->endSection() ?>
<!-- ************************************************** -->



<!-- ************************************************** -->
<?= $this->section('content') ?>

<!-- ============================================================== -->


<div class="stricky-header stricked-menu main-menu main-menu-with-bg">
    <div class="sticky-header__content"></div>
    <!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <div id="carouselHome" class="carousel slide" style="margin-top: 80px;" >
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- 01 -->
                <div class="carousel-item active">
                    <img src="/2024/29-09/bolita-01.png" class="d-block w-100" alt="...">
                </div>
                <!-- 02 -->
                <div class="carousel-item">
                    <div style="" class=" wrapperBanner01 " >
                        <img src="/2024/29-09/bolita-02-d.png" class="d-block w-100" alt="...">
                        <div class="row rowBoton1 " >
                            <div class="col-lg-5 col-5 " ></div>
                            <div class="col-lg-2 col-7 " >
                                <a href="/curso/18/derecho-laboral-empresarial-2024" class=" btnBanner1 btnInfoC btn btn-secondary "   >Más información</a>
                            </div>
                            <div class="col-lg-5"></div>
                        </div>
                    </div>
                </div>
                <!-- 03 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-12 wrapperBanner02 " >
                            <img src="/2024/29-09/bolita-03-c.jpg" class="d-block w-100" alt="...">
                            <div class="row rowBoton2 "  >
                                <div class="col-lg-5 col-5 "></div>
                                <div class="col-lg-2 col-7 ">
                                    <a href="https://wa.me/51941280252?text=Hola%20quiero%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20la%20suscripci%C3%B3n%20anual" target="_blank" class=" btnBanner1 btnInfoC btn btn-secondary "   >Más información</a>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="main-slider__one eduact-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"smartSpeed": 1000, 
        "autoplay": true, 
        "autoplayTimeout": 17000, 
		"autoplayHoverPause": false,
		"nav": false,
		"dots": true,
		"margin": 0
	    }'>
                





                <!-- slider-item-start -->
                <!-- 1  -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 ">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Seguridad y Salud en el Trabajo</h2>
                                        <p class="main-slider__text">Expositor: Jonathan Criollo González<br/>Jueves 15 de agosto, de 7:00 - 10 pm</p>
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>curso/06/seguridad-y-salud-en-el-trabajo" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver información<i class="icon-arrow"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 " style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/banner-home-seguridad-salud-trabajo-01.png" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->





                <!-- slider-item-start -->
                <!-- 2 -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 ">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Obligaciones laborales en Seguridad y Salud en el Trabajo</h2>
                                        <p class="main-slider__text">Expositor: Rina Rimachi Castañeda<br/>Martes 20 de agosto de 7:00 - 10:00 p.m.</p>
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>curso/08/obligaciones-laborales-en-seguridad-y-salud-en-el-trabajo" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver información<i class="icon-arrow"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 " style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/SSCO_549x825.png" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->




                <!-- 1 -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-6 " style="xxposition:relativexx;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/29-09/bolita-01.png" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->







                <!-- slider-item-start -->
                <!-- 3 -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-12 " style="xxposition:relativexx;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/29-09/bolita-03-01.png" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->




                <!-- slider-item-start -->
                <!-- ¿Cómo se desarrolla el procedimiento inspectivo sancionador de la Sunafil? -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 ">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >¿Cómo se desarrolla el procedimiento inspectivo sancionador de la Sunafil?</h2>
                                        <p class="main-slider__text">Expositor: Jonathan Criollo González<br/>Martes 27 de agosto.</p>
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>curso/04/Como-se-desarrolla-el-procedimiento-inspectivo-sancionador-de-la-Sunafil" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver información<i class="icon-arrow"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 " style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/banner-08-agosto-01.jpeg" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->




                




                <!-- slider-item-start -->
                <!-- Sujetos Sin Capacidad Operativa: jueves 22 de agosto, de 7:00 10:00 pm -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 ">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Sujetos Sin Capacidad Operativa</h2>
                                        <p class="main-slider__text">Jueves 22 de agosto, de 7:00 10:00 pm</p>
                                        <div class="main-slider__btn" >
                                            <a href="<?= esc($APP_URL) ?>curso/05/sujetos-sin-capacidad-operativa" class="eduact-btn eduact-btn-second" >
                                                <span class="eduact-btn__curve"></span>Ver información<i class="icon-arrow"></i> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 " style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/banner-principal-sujetos-sin-capacidad-operativa-01.png" alt="eduact" class=" img-fluid img-resposive " style="" />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-three"></div>
                                    <div class="main-slider__shape-four"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->






                <!-- slider-item-start -->
                <!-- <div class="item">
                    <div class="main-slider__item">
                        <div class="main-slider__bg" style="background-image: url(/2024/fondo-banner-02.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title" style="text-transform: none;" >Obligaciones del empleador frente al hostigamiento sexual laboral</h2>
                                        <p class="main-slider__text">Expositor: Jonathan Criollo González<br/>Jueves 8 de agosto de 7:00 - 10:00 pm</p>
                                        <div class="main-slider__btn">
                                            <a href="<?= esc($APP_URL) ?>curso/03/Obligaciones-del-empleador-frente-al-hostigamiento-sexual-laboral" class="eduact-btn eduact-btn-second">
                                                <span class="eduact-btn__curve"></span>Ver seminario<i class="icon-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5" style="position:relative;" >
                                    <div class="main-slider__layer">
                                        <div class="main-slider__layer-thumb eduact-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                                            <img src="/2024/banner-27-agosto-01.jpeg" alt="eduact" class=" img-responsive img-fluid " />
                                        </div>
                                    </div>
                                    <div class="main-slider__shape-nine">
                                        <img src="assets/images/shapes/slider-shape-9.png" alt="eduact" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- slider-item-end -->




            </div>
        </section>
        <!--Main Slider End-->
        <!-- About Start -->

        <!-- About End -->
        <!-- Service Start -->
        <section class="service-three" style="">
            <div class="container">
                <div class="row" style="margin-bottom:10px;" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-12">
                        <p style="text-align: justify;font-size:18px;" >
                            <strong>CcapaCcorp</strong>, busca ser el aliado estratégico de sus clientes, ayudándolos a través de las
                            capacitaciones a cumplir con su desempeño laboral organizacional y a lograr sus objetivos institucionales.
                            <br/><br/>
                            Para tal efecto, desarrollamos las capacitaciones teniendo en cuenta los lineamientos
                            esenciales siguientes: temas coyunturales, necesidades profesionales-empresariales y el respaldo de la amplia trayectoria profesional de los expositores.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 ">
                        <!-- <h4 style="text-align:center" >
                        Nuestra<br/>MISIÓN
                        </h4> -->
                        <div style="width:160px;margin:0 auto;" >
                            <img src="/2024/29-09/mision-01.png" class=" img-fluid " />
                        </div>

                        <p style="text-align: justify;font-size:18px;" >
                        Brindar capacitaciones de calidad y acorde a las necesidades de los empresarios, profesionales, emprendedores y a toda persona que quiera potenciar sus conocimientos.
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3 ">
                        <img src="/2024/29-09/vision-b.png" class=" img-fluid " />
                    </div>
                </div>

                <div class="row" style="margin-top:20px;" >
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3">
                        <img src="/2024/29-09/mision-b.png" class=" img-fluid " />
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <!-- <h4 style="text-align:center" >
                        Nuestra<br/>VISIÓN
                        </h4> -->
                        <div style="width:160px;margin:0 auto;" >
                            <img src="/2024/29-09/vision-01.png" class=" img-fluid " />
                        </div>
                        <p style="text-align: justify;font-size:18px;" >
                        Ser reconocida como una institución líder en el Perú, que garantiza a sus clientes capacitaciones con estándares de calidad a cambio de una inversión accesible.
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>

                <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInLeft" data-wow-delay="100ms">
                            <br/>
                            <h5 class="section-title__tagline" style="font-size: 56px;color: #3176c1;margin-bottom: 30px;" >
                                CcapaCcorp
                            </h5>
                            
                            <h3 class="section-title__title" style="color: #ecb069;font-size: 30px;line-height: 30px;" >
                                Centro de Capacitación & Competencias Corporativas
                            </h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="100ms">
                        <p class="service-three__section-text" style="text-align: justify;font-size: 20px;" >
                        Tiene como objetivo ampliar y fortalecer los conocimientos, aptitudes y habilidades de los profesionales que se desenvuelven diariamente en las empresas, brindándoles herramientas acorde a sus necesidades, para que logren un desempeño laboral exitoso y logren los objetivos institucionales.
                        <br/>
                        En ese sentido, los lineamientos para desarrollar nuestras capacitaciones están sostenidos en nuestro compromiso, responsabilidad y seriedad  de brindarle a nuestros clientes temas de coyuntura conforme al marco legal y por supuesto, respaldados por los amplios conocimientos y experiencia de nuestros expositores.
                        </p>
                    </div>
                </div> -->
                
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
                    <h2 class="section-title__title">PRÓXIMOS SEMINARIOS</h2>
                </div>

                <div class="row">
                    <div class=" col-lg-6 col-xl-6 " >
                        <div class="course-three__item">
                            <div class="course-three__thumb">
                                <img src="/2024/11-11/curso_21-ESSALUD.jpg" alt="eduact">
                            </div>
                            <div class="course-three__content">
                                <div class="course-three__time" >Laboral</div>
                                <h4 class="course-three__title">
                                    <a href="<?= esc($APP_URL) ?>curso/21/Sabes-como-recuperar-exitosamente-los-subsidios-laborales-ante-EsSalud" >
                                    ¿Sabes cómo recuperar exitosamente los subsidios laborales ante EsSalud?
                                    </a>
                                </h4>
                                <div class="course-three__bottom">
                                    <div class="course-three__author">
                                        <h5 class="course-three__author__name" >Martes 10 de Diciembre</h5>
                                        <p class="course-three__author__designation" style="text-transform: none;" >De 7:00 p.m. a 10:00 p.m.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=" col-lg-6 col-xl-6 " >
                        <div class="course-three__item">
                            <div class="course-three__thumb">
                                <img src="/2024/11-11/curso-Conta-01.jpg" alt="eduact">
                            </div>
                            <div class="course-three__content">
                                <div class="course-three__time" >Contable</div>
                                <h4 class="course-three__title">
                                    <a href="<?= esc($APP_URL) ?>curso/19/CONTABILIDAD-PARA-NO-CONTADORES" >
                                    Contabilidad para no contadores
                                    </a>
                                </h4>
                                <div class="course-three__bottom">
                                    <div class="course-three__author">
                                        <h5 class="course-three__author__name" >Martes 03 y jueves 05 de diciembre</h5>
                                        <p class="course-three__author__designation" style="text-transform: none;" >De 7:00 p.m. a 10:00 p.m.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <!-- ./row -->
                <!-- ./row -->
                <!-- ./row -->
                <!-- ./row -->
                <!-- ./row -->
                <!-- ./row -->
                <!-- ./row -->

                
            </div>
        </section>
        <!-- Course End -->
        <!-- Category Start -->
        
        <!-- Category End -->
        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->
        <!-- Team Start -->
        <!-- <section class="team-three" style="padding: 50px 0 85px;" >
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="100ms">
                    
                    <h2 class="section-title__title">Conoce a nuestros expositores</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/Expositor-01-416-551.png" alt="eduact">
                            </div>
                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/01/cesar-puntriano-rosas">César Puntriano Rosas</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/no-user-02.png" alt="eduact">
                            </div>
                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/03/rina-rimachi-castaneda">Rina Rimachi Castañeda</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="team-three__item">
                            <div class="team-three__image">
                                <img src="/2024/Jonathan-Criollo-Rodriguez-01.png" alt="eduact">
                            </div>                            
                            <div class="team-three__content" style="bottom: 75px;" >
                                <h3 class="team-three__title">
                                    <a href="<?= esc($APP_URL) ?>expositor/02/jonathan-criollo-rodriguez">Jonathan Criollo Rodríguez</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Team End -->
        <!-- Blog Start -->
        
        <!-- Blog End -->
        <!-- /.client-carousel -->
        <!-- Call To Action Start -->
        
        <!-- Call To Action End -->


<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->




<?= $this->section('los_js') ?>

<script type="text/javascript">
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
//
(function($){
	$(document).ready(function()
    {
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        $('#carouselHome').carousel({
            interval: 5000
        }); 
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
        /* ------------------------------------------------------------- */
    });

})(jQuery);
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
/* ------------------------------------------------------------- */
</script>

<?= $this->endSection() ?>
