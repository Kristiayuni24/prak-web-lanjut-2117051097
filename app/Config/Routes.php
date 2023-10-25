<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('user/profile/(:any)/(:any)/(:any)', 'UserController::profile/$1/$2');

# form
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user/index', 'UserController::index');
$routes->get('user/(:any)', [UserController::class, 'show']);