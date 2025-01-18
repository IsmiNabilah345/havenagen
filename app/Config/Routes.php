<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->setAutoRoute(true);
 $routes->get('/', 'Home::landing');
 $routes->get('/landing', 'Home::landing');
//  $routes->get('/login', 'Home::index');
$routes->get('/minuman', 'Home::minuman');
$routes->get('/cemilan', 'Home::cemilan');
$routes->get('/makanan', 'Home::makanan');
$routes->get('/hubungikami', 'Home::hubungikami');
$routes->get('/keranjang', 'Home::keranjang');
$routes->get('/index', 'User::index', ['filter' => 'login']);