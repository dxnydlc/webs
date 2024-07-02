<?php

use CodeIgniter\Router\RouteCollection;

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

// /etc/apache2/sites-available/
// /var/www/html/repos/webs/project-ccapaccorp/public/
// www.ccapaccorp.delacruz.pe