
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
    </div>
</div>



<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->

