


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




$Banner_interno = '/2024/29-09/seminario-igual-dad-salarial.jpg';

$Banner_superior = '/2024/29-09/banner-interno-01.jpg';

$Titulo_curso_inferior = 'Elabora e implementa la igualdad salarial en tu empresa';
$Titulo_curso_superior = 'Elabora e implementa la igualdad salarial en tu empresa';


# Expositor
$Expositor_alias = 'Expositor';// Expositor | Expositora
$Expositor = 'César Puntriano Rosas';
$Exposito_Thumb = '/2024/29-09/dr-Puntriano-01.jpeg';
$imagen_expositor_interno = '/2024/29-09/dr-Puntriano-01.jpeg';
$acerca_instrucctor = '

Socio principal en el Estudio Muñiz, Olaya, Meléndez, Castro, Ono & Herrera Abogados.
<br/>
Abogado y magister en derecho del trabajo y seguridad social por la Pontificia Universidad Católica del Perú. Docente en pregrado y posgrado en ESAN, docente en la maestría en derecho del trabajo en la Universidad de San Martín de Porres y en la Maestría en Derecho Empresarial en la Universidad de Lima. 

';

# Texto de WhatsApp
# https://www.urlencoder.org/
# Hola quiero inscribirme al seminario: Elabora e implementa la igualdad salarial en tu empresa
$texto_whatsApp = 'https://wa.me/51941280252?text=Hola%20quiero%20inscribirme%20al%20seminario%3A%20Elabora%20e%20implementa%20la%20igualdad%20salarial%20en%20tu%20empresa';


# Inversión
$inversion_texto = '
<h4 class="course-details__curriculum__title">Inversión</h4>
<p class="course-details__curriculum__text">
S/ 170.00 incluido IGV
<br/>
<!-- 10% de descuento sobre el total cuando se registren 3 participantes (tarifa corporativa). -->
</p>
';


# Descripción
$texto_interno = '
<p class="course-details__overview__text" style="font-size:20px;" >
    Actualmente la Sunafil se encuentra enviando cartas inductivas a todas las empresas con el propósito que cumplan con la elaboración e implementación de la política salarial, cuadro de categorías y funciones de los trabajadores, programas de capacitación y la banda salarial. 
<br/>
En tal sentido, a través de este seminario le brindaremos los alcances legales para contestar las cartas inductivas, elaborar e implementar el sistema de equidad salarial y evitar multas laborales.

</p>



<p class="course-details__overview__text" style="font-size:20px;margin-bottom: 3px;" >

<strong>Temas a tratar:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li>
        <span class="icon-check"></span>
        Marco legal
    </li>
    <li>
        <span class="icon-check"></span>
        Explicaremos cómo responder una carta inductiva de Sunafil
    </li>
    <li>
        <span class="icon-check"></span>
        Te enseñaremos cómo elaborar una política salarial
    </li>
    <li>
        <span class="icon-check"></span>
        Te indicaremos cómo cumplir con las demás obligaciones previstas en la Ley N° 30709, Ley que prohíbe la discriminación salarial entre varón y mujer
    </li>
    <li>
        <span class="icon-check"></span>
        Infracciones y multas laborales
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
                            <!-- <img src="<?= $Banner_interno ?>" alt="eduact" style="max-width: 500px;border: 1px silver solid;" class=" img-fluid " /> -->
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

