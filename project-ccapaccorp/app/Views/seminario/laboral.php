
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

<section>

    <div class="container">

        <div class="row" style="margin-top: 50px;" >

            <div class="col-lg-3"></div>

            <div class="col-xl-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="course-three__item">
                    <div class="course-three__thumb">
                        <img src="/2024/curso-banner-02.jpeg" alt="eduact">
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
        </div>

    </div>

</section>

<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->

