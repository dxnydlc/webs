
<?= $this->extend('layouts/principal') ?>



<!-- ************************************************** -->
<?= $this->section('titulo') ?>
Inicio
<?= $this->endSection() ?>
<!-- ************************************************** -->





<!-- ************************************************** -->
<?= $this->section('header') ?>
CcapaCcorp
<?= $this->endSection() ?>
<!-- ************************************************** -->


<!-- ************************************************** -->
<?= $this->section('header-class') ?>
main-header-two
<?= $this->endSection() ?>
<!-- ************************************************** -->






<!-- ************************************************** -->
<?= $this->section('content') ?>

<!-- ============================================================== -->


<div class="stricky-header stricked-menu main-menu main-header-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header page-header--bg-two" data-jarallax data-speed="0.3" data-imgPosition="50% -100%">
            <div class="page-header__bg jarallax-img"></div><!-- /.page-header-bg -->
            <div class="page-header__overlay"></div><!-- /.page-header-overlay -->
            <div class="container text-center">
                <h2 class="page-header__title">Contacto</h2><!-- /.page-title -->
                <ul class="page-header__breadcrumb list-unstyled">
                    <li><a href="/">Inicio</a></li>
                    <li><span>Contacto</span></li>
                </ul><!-- /.page-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <!-- Contact Start -->
        <section class="contact-one">
            <div class="container wow fadeInUp" data-wow-delay="300ms">
                <div class="section-title  text-center">
                    <h5 class="section-title__tagline">
                        contacto
                    </h5>
                    <h2 class="section-title__title">Sientete libre de escribir en cualquier momento</h2>
                </div><!-- section-title -->
                <div class="contact-one__form-box  text-center">
                    <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Your Name" name="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="email" placeholder="Email Address" name="Correo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Phone" name="Telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Subject" name="Asunto">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Mensaje"></textarea>
                                </div>
                                <div class="contact-one__btn-box">
                                    <button type="submit" class="eduact-btn eduact-btn-second"><span class="eduact-btn__curve"></span>Enviar mensaje<i class="icon-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div>
                </div>
            </div>
        </section>
        <!-- Contact End -->
        <!-- Info Start -->
        <section class="contact-info">
            <div class="container">
                <ul class="contact-info__wrapper">
                    <li>
                        <div class="contact-info__icon"><span class="icon-Call"></span></div>
                        <p class="contact-info__title">Have any question?</p>
                        <h4 class="contact-info__text">Free <a href="tel:230008050">+ 23 (000)-8050</a></h4>
                    </li>
                    <li class="active">
                        <div class="contact-info__icon"><span class="icon-Email"></span></div>
                        <p class="contact-info__title">Send Email</p>
                        <h4 class="contact-info__text"><a href="mailto:Demo@gmail.com">Demo@gmail.com</a></h4>
                    </li>
                    <li>
                        <div class="contact-info__icon"><span class="icon-Location"></span></div>
                        <p class="contact-info__title">Visit Anytime</p>
                        <h4 class="contact-info__text">6391 Elgin St. Delaware 10299</h4>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Info End -->
        <!--Google Map Start-->
        <section class="google-map">
            
        </section>
        <!--Google Map End-->

<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->

