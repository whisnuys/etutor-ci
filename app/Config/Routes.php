<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Home::index');
$routes->get('/contact', 'User\Home::contact');
$routes->get('/about', 'User\Home::about');
