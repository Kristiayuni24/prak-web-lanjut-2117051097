<?php
use App\Controllers\Home;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/profile/(:any)/(:any)/(:any)', [UserController::class, 'profile']);

#form
$routes->get('/user/create', [UserController::class, 'create']);