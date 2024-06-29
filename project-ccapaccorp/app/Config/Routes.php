<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get('/nosotros', 'Home::nosotros');

$routes->get('/contacto', 'Home::contacto');

$routes->get('/curso/01/(:any)', 'Home::curso_01/$1');


// /etc/apache2/sites-available/
// /var/www/html/repos/webs/project-ccapaccorp/public/
// www.ccapaccorp.delacruz.pe