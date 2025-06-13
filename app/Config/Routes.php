<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register'); //HAPUS NANTI, HANYA UNTUK TESTING
$routes->get('/user', 'Home::user'); //HAPUS NANTI, HANYA UNTUK TESTING
