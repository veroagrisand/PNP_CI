<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/forum', 'forum');
$routes->get('/home2', 'index2');
$routes->get('/komunitas', 'komunitas');
$routes->get('/daftar', 'registration');
