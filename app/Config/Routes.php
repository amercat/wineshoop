<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\NosvinsController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosvins', 'NosvinsController::index'); // Route to the index method of NosvinsController
$routes->get('contact', 'ContactUsController::index'); // Route to the index method of ContactusController

$routes->get('nosvins/(:any)', 'NosvinsController::ProductLookupById/$1');




use App\Controllers\Pages;

// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);