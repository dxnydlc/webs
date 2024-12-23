<?php

use CodeIgniter\Router\RouteCollection;


# Random index para las versiones JS
$characters         = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength   = strlen($characters);
$randomString       = '';
for ($i = 0; $i < 2; $i++) {// 2 digitos
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
define( 'VERSION' , $randomString );


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get('/nosotros', 'Home::nosotros');

$routes->get('/contacto', 'Home::contacto');

$routes->get('/curso/01/(:any)', 'Home::curso_01/$1');

$routes->get('/curso/02/(:any)', 'Home::curso_02/$1');

// Obligaciones del empleador frente al hostigamiento sexual laboral
$routes->get('/curso/03/(:any)', 'Home::curso_03/$1');

// ¿Cómo se desarrolla el procedimiento inspectivo sancionador de la Sunafil?
$routes->get('/curso/04/(:any)', 'Home::curso_04/$1');

// Sujetos sin capacidad operativa y operaciones no reales
$routes->get('/curso/05/(:any)', 'Home::curso_05/$1');

// Introd y temario SST | /curso/06/seguridad-y-salud-en-el-trabajo
$routes->get('/curso/06/(:any)', 'Home::curso_06/$1');

// xxxxxxxxx
$routes->get('/curso/07/(:any)', 'Home::curso_07/$1');

// xxxxxxxxx
$routes->get('/curso/08/(:any)', 'Home::curso_08/$1');

// ¿Sabes cómo elaborar e implementar la Igualdad Salarial en tu Empresa?
$routes->get('/curso/09/(:any)', 'Home::curso_09/$1');

// ¿Sabes cómo elaborar e implementar la Igualdad Salarial en tu Empresa?
$routes->get('/curso/10/(:any)', 'Home::curso_10/$1');


// Conceptos remunerativos y no remunerativos 
$routes->get('/curso/11/(:any)', 'Home::curso_11/$1');


// Incremento patrimonial NO justificado
$routes->get('/curso/12/(:any)', 'Home::curso_12/$1');


// Evita contingencias legales ante un despido
$routes->get('/curso/13/(:any)', 'Home::curso_13/$1');


// Últimos precedentes vinculantes del tribunal de fiscalización laboral de sunafil y su repercusión en los empleadores.
$routes->get('/curso/14/(:any)', 'Home::curso_14/$1');


// Evita multas en materia de seguridad y salud en el trabajo
$routes->get('/curso/15/(:any)', 'Home::curso_15/$1');


// Elabora e implementa la igualdad salarial en tu empresa
$routes->get('/curso/16/(:any)', 'Home::curso_16/$1');


// Sujetos sin capacidad operativa y operaciones no reales 
$routes->get('/curso/17/(:any)', 'Home::curso_17/$1');


// Derecho laboral empresarial 2024
$routes->get('/curso/18/(:any)', 'Home::curso_18/$1');


// CONTABILIDAD PARA NO CONTADORES
$routes->get('/curso/19/(:any)', 'Home::curso_varios/$1/19');


// CIERRE TRIBUTARIO
$routes->get('/curso/20/(:any)', 'Home::curso_varios/$1/20');

// ¿Sabes cómo recuperar exitosamente los subsidios laborales ante EsSalud?
$routes->get('/curso/21/(:any)', 'Home::curso_varios/$1/21');












$routes->get('/capacitacion-in-company/tributario', 'Home::tributario');
$routes->get('/capacitacion-in-company/laboral', 'Home::laboral');
$routes->get('/capacitacion-in-company/contable', 'Home::contable');


$routes->get('/seminario/tributario', 'Home::seminario_tributario');
$routes->get('/seminario/laboral', 'Home::seminario_laboral');
$routes->get('/seminario/contable', 'Home::seminario_contable');

$routes->get('/capatips/01/(:any)', 'Home::capatips_01/$1');

$routes->get('/expositor/01/(:any)', 'Home::expositor_01/$1');
$routes->get('/expositor/02/(:any)', 'Home::expositor_02/$1');
$routes->get('/expositor/03/(:any)', 'Home::expositor_03/$1');

// /etc/apache2/sites-available/
// /var/www/html/repos/webs/project-ccapaccorp/public/
// www.ccapaccorp.delacruz.pe

// /var/www/html/webs/project-ccapaccorp/public
// /ssl/ccapaccorp.com.pe.key
// /ssl/ccapaccorp.com.pe.crt