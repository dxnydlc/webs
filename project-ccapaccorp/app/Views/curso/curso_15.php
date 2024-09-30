


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




$Banner_interno = '/2024/29-09/soma-01.jpg';

$Banner_superior = '/2024/29-09/banner-interno-01.jpg';

$Titulo_curso_inferior = 'Evita multas en materia de seguridad y salud en el trabajo';
$Titulo_curso_superior = 'Evita multas en materia de seguridad y salud en el trabajo';


# Expositor
$Expositor_alias = 'Expositor';// Expositor | Expositora
$Expositor = 'Jonathan Criollo Rodríguez';
$Exposito_Thumb = '/2024/29-09/dr-Jhonatan-Criollo.jpeg';
$imagen_expositor_interno = '/2024/29-09/dr-Jhonatan-Criollo.jpeg';
$acerca_instrucctor = '
Experto consultor laboral del Estudio Jurídico Rodríguez Angobaldo.
<br/>
Especialista en Derecho Laboral Individual, Colectivo, Seguridad Social. Cuenta con amplia experiencia en consultoría laboral en el sector privado y asesoría en procedimientos administrativos inspectivos como asesor laboral en la revista Soluciones Laborales de Gaceta Jurídica. 

';

# Texto de WhatsApp
# https://www.urlencoder.org/
# Hola quiero inscribirme al seminario: Evita multas en materia de seguridad y salud en el trabajo
$texto_whatsApp = 'https://wa.me/51941280252?text=Hola%20quiero%20inscribirme%20al%20seminario%3A%20Evita%20multas%20en%20materia%20de%20seguridad%20y%20salud%20en%20el%20trabajo';


# Inversión
$inversion_texto = '
<h4 class="course-details__curriculum__title">Inversión</h4>
<p class="course-details__curriculum__text">
S/ 150.00 incluido IGV
<br/>
<!-- 10% de descuento sobre el total cuando se registren 3 participantes (tarifa corporativa). -->
</p>
';


# Descripción
$texto_interno = '
<p class="course-details__overview__text" style="font-size:20px;" >
Sabes que uno de los siguientes temas en la agenda de fiscalización de Sunafil es el cumplimiento de las obligaciones del empleador en materia de Seguridad y Salud en el Trabajo.

<br/>
En ese sentido, te proponemos participar de nuestro próximo seminario en el que, abordaremos las principales obligaciones del empleador en materia de Seguridad y Salud en el Trabajo, te indicaremos cuáles son los documentos de carácter obligatorio con los que debes contar y entregarles a los trabajadores. Asimismo, te especificaremos hasta dónde alcanzan las funciones del Supervisor y del Comité de Seguridad y Salud en el Trabajo y revisaremos las últimas jurisprudencias del Tribunal de Fiscalización de la Sunafil en esta materia.

</p>


<p class="course-details__overview__text" style="font-size:20px;margin-bottom: 3px;" >
<strong>Temas a tratar::</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li>
        <span class="icon-check"></span>
        Marco legal.
    </li>
    <li>
        <span class="icon-check"></span>
        Sistema de Seguridad y Salud en el Trabajo.
    </li>
    <li>
        <span class="icon-check"></span>
        Principales documentos en materia de SST: Registros, el Reglamento de SST, entre otros documentos relevantes.
    </li>
    <li>
        <span class="icon-check"></span>
        Obligaciones de prevención: EMOs y capacitaciones.
    </li>
    <li>
        <span class="icon-check"></span>
        Proceso de elección del Comité o Supervisor de Seguridad y Salud en el Trabajo.
    </li>
    <li>
        <span class="icon-check"></span>
        Obligación del Comité o Supervisor de Seguridad y Salud en el Trabajo.
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Hasta dónde alcanza la responsabilidad del gerente general frente a un accidente de trabajo?
    </li>
    <li>
        <span class="icon-check"></span>
        Alcance de últimas jurisprudencias del Tribunal de Fiscalización Laboral sobre SST.
    </li>
    <li>
        <span class="icon-check"></span>
        Infracciones y multas laborales.
    </li>
</ul>




























<br/>
<p class="course-details__overview__text" style="font-size:20px;" >
    <strong>Beneficios que te deja este seminario:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li><span class="icon-check"></span>
        Capacitación garantizada.
    </li>
    <li><span class="icon-check"></span>
        Te brinda herramientas para lograr los objetivos institucionales.
    </li>
    <li><span class="icon-check"></span>
        Te mantienes actualizado con las disposiciones legales.
    </li>
    <li><span class="icon-check"></span>
        Potencia tus conocimientos y perfil profesional.
    </li>
    <li><span class="icon-check"></span>
        Certificado virtual
    </li>
</ul>

<br/>
<p class="course-details__overview__text" style="font-size:20px;" >
    <strong>Incluye:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li><span class="icon-check"></span>
        Material de trabajo digital.
    </li>
    <li><span class="icon-check"></span>
        Acceso a la grabación del seminario.
    </li>
    <li><span class="icon-check"></span>
    Durante el seminario tendrás la oportunidad de interactuar con uno de los mejores abogados laboralistas del Perú.
    </li>
    
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
                            <!-- <img src="<?= $Banner_interno ?>" alt="eduact" style="max-width : 500px;border: 1px silver solid;" class=" img-fluid " /> -->
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

