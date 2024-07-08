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