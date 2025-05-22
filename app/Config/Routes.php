<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('admin', 'Admin::dashboard');
$routes->post('admin', 'Admin::dashboard');
$routes->get('admin/data', 'Admin::data');
