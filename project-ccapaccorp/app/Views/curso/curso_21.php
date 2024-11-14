


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




$Banner_interno = 'https://dummyimage.com/868x449/fff/aaa';

$Banner_superior = '/2024/29-09/banner-interno-01.jpg';

$Titulo_curso_inferior = '¿Sabes cómo recuperar exitosamente los subsidios laborales ante EsSalud?';
$Titulo_curso_superior = '¿Sabes cómo recuperar exitosamente los subsidios laborales ante EsSalud?';


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
$texto_whatsApp = 'https://wa.me/51941280252?text=Hola%20quiero%20inscribirme%20al%20seminario%3A%20%C2%BFSabes%20c%C3%B3mo%20recuperar%20exitosamente%20los%20subsidios%20laborales%20ante%20EsSalud%3F';


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
    <strong>Objetivo:</strong>
</p>
<p class="course-details__overview__text" style="font-size:20px;margin-bottom: 3px;" >
Este seminario busca esclarecer los principales supuestos en los que el empleador está obligado a pagar los subsidios a sus trabajadores, desarrollando los requisitos y formas de cálculos, desde los casos generales hasta supuestos especiales.
<br/>
Asimismo, se abordará el procedimiento a realizar ante EsSalud para recuperar exitosamente los subsidios pagados a los trabajadores.
<br/><br/>
<strong>Este seminario está dirigido a:</strong>
<br/>
Gerentes y jefes de recursos humanos, jefes de talento humano, jefes de personal, abogados, contadores, administradores, asistentes sociales, ejecutivos, asesores, asistentes de recursos humanos y a todas aquellas personas que buscan optimizar la gestión de los subsidios en sus empresas.
<br/><br/>
<strong>Temas a tratar:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li>
        <span class="icon-check"></span>
        Los subsidios como parte de las prestaciones económicas de EsSalud.
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Cuándo está obligado el empleador a pagar los subsidios?: Supuestos, requisitos y forma de cálculo.
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Qué sucede cuando el trabajador ha alcanzado el plazo máximo de pago de subsidios y sigue incapacitado para el trabajo?
    </li>
    <li>
        <span class="icon-check"></span>
        El caso especial de las trabajadoras gestantes con ocasión a la modificación del artículo 10 de la Ley N° 26790.
    </li>
    <li>
        <span class="icon-check"></span>
        Recuperación de los subsidios frente a EsSalud: Plazo, requisitos y procedimiento de recuperación.
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Por qué EsSalud rechaza los reembolsos de subsidios?
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Qué acciones se pueden tomar ante los rechazos de subsidios?
    </li>
    <li>
        <span class="icon-check"></span>
        ¿En qué casos es válido descontarles a los trabajadores por el rechazo de EsSalud?
    </li>
    <li>
        <span class="icon-check"></span>
        Te enseñaremos a llenar los formularios.
    </li>
    <li>
        <span class="icon-check"></span>
        Casuísticas.
    </li>
    <li>
        <span class="icon-check"></span>
        Entre otros temas de mayor relevancia.
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
        Potencia tus conocimientos y perfil profesional.
    </li>
    <li><span class="icon-check"></span>
        Te brinda herramientas para lograr los objetivos institucionales.
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
    Durante el seminario vas a interactuar directamente con el especialista en la materia.
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
                            <!-- <img src="<?= $Banner_interno ?>" alt="eduact" style="max-width11: 11400px;border: 1px silver solid;" class=" img-fluid " /> -->
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

