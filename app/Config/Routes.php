<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('nosvins', 'NosvinsController::index'); // Route to the index method of NosvinsController



use App\Controllers\Pages;

// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);