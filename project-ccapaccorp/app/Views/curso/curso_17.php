


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




$Banner_interno = '/2024/29-09/capacidad-operativa-01.jpg';

$Banner_superior = '/2024/29-09/banner-interno-01.jpg';

$Titulo_curso_inferior = 'Sujetos sin capacidad operativa y operaciones no reales ';
$Titulo_curso_superior = 'Sujetos sin capacidad operativa y operaciones no reales ';


# Expositor
$Expositor_alias = 'Expositor';// Expositor | Expositora
$Expositor = 'Luis García Romero';
$Exposito_Thumb = '/2024/29-09/dr-luis-garcia-01.jpg';
$imagen_expositor_interno = '/2024/29-09/dr-luis-garcia-01.jpg';
$acerca_instrucctor = '

Socio Senior del Estudio Muñiz, Olaya, Meléndez, Castro, Ono & Herrera Abogados
<br/>
Abogado especialista en Derecho Tributario y Corporativo, egresado de la maestría en tributación y política fiscal en la Universidad de Lima, con especialización en derecho tributario internacional por la Universidad de Austral – Argentina y Post título en Regulación de Servicios Públicos Osinerg – Universidad del Pacífico. Ha sido catedrático en la Universidad Católica San Pablo, Arequipa, profesor de Post Título de la Pontificia Universidad Católica del Perú y de la Universidad ESAN. Miembro del Instituto Peruano de Derecho Tributario - IPDT.

';

# Texto de WhatsApp
# https://www.urlencoder.org/
# Hola quiero inscribirme al seminario: ccccc
$texto_whatsApp = 'https://wa.me/51941280252?text=Hola%20quiero%20inscribirme%20al%20seminario%3A%20%C2%BFC%C3%B3mo%20se%20desarrolla%20el%20procedimiento%20inspectivo%20sancionador%20de%20la%20Sunafil%3F';


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
    La SUNAT considera como “Sujetos Sin Capacidad Operativa - SSCO” a los contribuyentes que no cuentan con recursos económicos, logísticos, humanos y otros para realizar operaciones por las que emiten comprobantes de pagos. 

<br/>
Del mismo modo, ha detectado que muchas empresas incurren en evasión tributaria al declarar facturas de operaciones no reales con el propósito de justificar gastos, costos o crédito fiscal. 

<br/>
A través de este seminario te brindaremos los alcances legales para prevenir contingencias con el ente fiscalizador.

</p>


<p class="course-details__overview__text" style="font-size:20px;margin-bottom: 3px;" >

<strong>Temas a tratar:</strong>
</p>
<ul class="list-unstyled course-details__overview__lists">
    <li>
        <span class="icon-check"></span>
        Sujetos sin capacidad operativa: ¿Quiénes son?
    </li>
    <li>
        <span class="icon-check"></span>
        ¿Qué riesgos suponen para las empresas formales?
    </li>
    <li>
        <span class="icon-check"></span>
        Operaciones no reales: La acotación más común de la SUNAT.
    </li>
    <li>
        <span class="icon-check"></span>
        Casuística y criterios de fiscalización.
    </li>
    <li>
        <span class="icon-check"></span>
        Entre otros temas que guarden relación con las materias.
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

