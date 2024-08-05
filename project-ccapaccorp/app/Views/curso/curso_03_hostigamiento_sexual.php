


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
<?php




$Banner_interno = '/2024/banner-27-agosto-01.jpeg';

$Banner_superior = '/2024/banner-13.png';

$Titulo_curso_inferior = 'Obligaciones del Empleador frente al Hostigamiento Sexual Laboral';
$Titulo_curso_superior = 'Obligaciones del empleador frente al hostigamiento sexual laboral';


# Expositor
$Expositor_alias = 'Expositor';// Expositor | Expositora
$Expositor = 'Jonathan Criollo González';
$Exposito_Thumb = '/2024/Jonathan-Criollo-Rodriguez-01.png';
$imagen_expositor_interno = '/2024/Jonathan-Criollo-Rodriguez-01.png';
$acerca_instrucctor = '
Especialista en Derecho Laboral Individual, Colectivo, Seguridad Social y Procedimientos Administrativos.
<br/>
Cuenta con experiencia en consultoría laboral en el sector privado y asesoría en procedimientos administrativos como asesor laboral en la revista Soluciones Laborales de Gaceta Jurídica, y actualmente forma parte del equipo de consultoría laboral del Estudio Jurídico Rodríguez Angobaldo.
';

# Texto de WhatsApp
# https://www.urlencoder.org/
# Hola quiero inscribirme al seminario: ccccc
$texto_whatsApp = 'https://wa.me/51941280252?text=Hola%20quiero%20inscribirme%20al%20seminario%3A%20Obligaciones%20del%20empleador%20frente%20al%20hostigamiento%20sexual%20laboral';


# Inversión
$inversion_texto = '
<h4 class="course-details__curriculum__title">Inversión</h4>
<p class="course-details__curriculum__text">
S/ 150.00 más IGV
<br/>
<!-- 10% de descuento sobre el total cuando se registren 3 participantes (tarifa corporativa). -->
</p>
';


# Descripción
$texto_interno = '
<p class="course-details__overview__text" style="font-size:20px;margin-bottom: 3px;" >
<br/>
Actualmente la Sunafil se encuentra fiscalizando el cumplimiento de las obligaciones laborales en materia de hostigamiento sexual en el trabajo. Sin embargo, muchas empresas desconocen los requerimientos que exige la Ley de Prevención de Hostigamiento Sexual.
<br/>
En tal sentido, a través de este seminario le brindaremos los alcances legales para implementar el procedimiento de prevención, investigación y sanción del hostigamiento sexual y evitar contingencias laborales.

</p>

<br/>

<br/>
<p class="course-details__overview__text" style="font-size:20px;" >
    <strong>Temario:</strong>
</p>

<ul class="list-unstyled course-details__overview__lists">
    <li><span class="icon-check"></span>¿Qué es el hostigamiento sexual laboral?</li>
    <li><span class="icon-check"></span>¿Cuáles son las manifestaciones del hostigamiento sexual laboral?</li>
    <li><span class="icon-check"></span>Documentos en materia de prevención y sanción del hostigamiento sexual laboral.</li>
    <li><span class="icon-check"></span>Elección del comité y delegado de intervención para el hostigamiento sexual laboral.</li>
    <li><span class="icon-check"></span>Procedimiento de investigación y sanción del hostigamiento sexual laboral.</li>
    <li><span class="icon-check"></span>Situaciones especiales de hostigamiento sexual laboral.</li>
    <li><span class="icon-check"></span>Infracciones y multas laborales.</li>
</ul>


<br/>
<br/>
<p class="course-details__overview__text" style="font-size:20px;" >
    <strong>Beneficios que te deja este seminario:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li><span class="icon-check"></span>Incrementa y/o fortalece tus conocimientos</li>
    <li><span class="icon-check"></span>Te brinda herramientas para lograr los objetivos institucionales.</li>
    <li><span class="icon-check"></span>Potencia tu perfil profesional.</li>
    <li><span class="icon-check"></span>Certificado virtual.</li>
</ul>

<br/>
<p class="course-details__overview__text" style="font-size:20px;" >
    <strong>Incluye:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li><span class="icon-check"></span>Material digital.</li>
    <li><span class="icon-check"></span>Acceso a la grabación del seminario.</li>
    <li><span class="icon-check"></span>Durante el seminario podrás realizar todas las preguntas directamente al expositor.</li>
    
</ul>
';
?>






<div class="stricky-header stricked-menu main-menu main-header-two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<section class="page-header page-header--bg-two"  >
    <div class="page-header__bg jarallax-img" style="background-image: url(<?= $Banner_superior ?>);" ></div>
    <!-- /.page-header-bg -->
    <div class="page-header__overlay" style="background-color:rgba(var(--eduact-black2-rgb), 0.3)" ></div>
    <!-- /.page-header-overlay -->
    <div class="container text-center">
        <h2 class="page-header__title" style="text-transform: none;" ><?= $Titulo_curso_superior ?></h2>
        <!-- /.page-title -->
        <!-- /.page-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

        <!-- course-details-start -->
        <section class="course-details" style="padding: 40px 0;" >
            <div class="container">
                <div class="row">
                    <div class=" col-xl-12 " >
                        <div class="course-details__thumb">
                            <!-- IMAGEN BANNER -->
                            <img src="<?= $Banner_interno ?>" alt="eduact" style="max-width: 500px;" class=" img-fluid " />
                        </div>
                        <!-- details-thumb -->
                        <div class="course-details__meta">
                            <div class="course-details__meta__author">
                                <!-- EXPOSITOR -->
                                <img src="<?= $Exposito_Thumb ?>" alt="<?= $Expositor ?>" >
                                <h5 class="course-details__meta__name"><?= $Expositor ?></h5>
                                <p class="course-details__meta__designation"><?= $Expositor_alias ?></p>
                            </div>
                            <div class="course-details__meta__cats"><a href="#" style="font-size: 22px;" >Seminario on-line</a></div>
                            
                        </div>
                        <!-- details-meta -->
                        <h3 class="course-details__title" ><?= $Titulo_curso_inferior ?></h3>
                        <!-- details-title -->
                        <div class="course-details__tabs tabs-box">
                            <ul class="course-details__tabs__lists tab-buttons list-unstyled">
                                <li data-tab="#overview" class="tab-btn active-btn"><span>Descripción</span></li>
                                <li data-tab="#curriculum" class="tab-btn"><span>Inversión</span></li>
                                <li data-tab="#instructor" class="tab-btn"><span>Expositor</span></li>
                                <li class="tab-btn1">
                                    <span>
                                        <a href="<?= $texto_whatsApp ?>" target="_blank" >Quiero inscribirme</a>
                                    </span>
                                </li>
                            </ul><!-- tab-title -->
                            <div class="tabs-content">
                                <div class="tab active-tab fadeInUp animated" id="overview">
                                    <div class="course-details__overview">
                                    <!-- ============================================================= -->
                                     <?= $texto_interno ?>
                                    <!-- ============================================================= -->
                                    </div>
                                </div><!-- tab-content-overview -->
                                <div class="tab fadeInUp animated" id="curriculum">
                                    <div class="course-details__curriculum" >
                                        <!-- ============================================================= -->
                                        <?= $inversion_texto ?>
                                        <!-- ============================================================= -->
                                    </div>
                                </div><!-- tab-content-curriculum -->
                                <!-- tab-content-reviews -->
                                <div class="tab fadeInUp animated" id="instructor">
                                    <div class="course-details__instructor">
                                        <figure class="course-details__instructor__thumb">
                                            <img src="<?= $imagen_expositor_interno ?>" alt="eduact" style="height:118%" >
                                        </figure><!-- instructor-image -->
                                        <h4 class="course-details__instructor__name" ><?= $Expositor ?></h4>
                                        <!-- instructor-name -->
                                        <!-- instructor-designation -->
                                        <p class="course-details__instructor__text">
                                            <!-- ============================================================= -->
                                             <?= $acerca_instrucctor ?>
                                            <!-- ============================================================= -->
                                        </p>
                                        <!-- instructor-text -->
                                    </div>
                                </div><!-- tab-content-instructor -->
                            </div><!-- tab-content -->
                        </div><!-- tabs -->
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- course-details-end -->




<!-- ============================================================== -->

<?= $this->endSection() ?>
<!-- ************************************************** -->

