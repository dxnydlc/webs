
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
            <div class="page-header__bg jarallax-img" style="background-image: url(/2024/banner-07.png);" ></div><!-- /.page-header-bg -->
            <div class="page-header__overlay" style="background-color:rgba(var(--eduact-black2-rgb), 0.3)" ></div><!-- /.page-header-overlay -->
            <div class="container text-center">
                <h2 class="page-header__title" style="text-transform: none;" >Contáctanos</h2><!-- /.page-title -->
                <!-- /.page-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <!-- Contact Start -->
        <section class="contact-one">
            <div class="container wow fadeInUp" data-wow-delay="300ms">
                <div class="section-title  text-center">
                    
                    <h2 class="section-title__title">Por favor escríbenos y te responderemos a la brevedad posible.</h2>
                    
                </div><!-- section-title -->
                <div class="contact-one__form-box  text-center">
                    <p for="" style="font-size: 20px; color:black;margin-bottom: 8px;text-align: left;" ><span style="color:black;font-size:30px;" >*</span> Información obligatoria.</p>
                    <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Nombre y apellido *" name="Nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="email" placeholder="Correo electŕonico*" name="Correo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Teléfono *" name="Telefono">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-one__input-box">
                                    <input type="text" placeholder="Empresa *" name="Asunto">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-one__input-box text-message-box">
                                    <textarea name="message" placeholder="Seminario o servicio de su interés *"></textarea>
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
    
                        <h4 class="contact-info__text"><a href="tel:+51941280252">941 280 252</a>
                    </li>
                    <li class="active22">
                        <div class="contact-info__icon"><span class="icon-Email"></span></div>
                        <h4 class="contact-info__text"><a href="mailto:capacitaciones@ccapaccorp.com.pe" >capacitaciones@ccapaccorp.com.pe</a></h4>
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

