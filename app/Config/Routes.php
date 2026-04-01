<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// 🏠 Default route
$routes->get('/', 'Home::index');

// 🔐 Auth (Login & Logout)
$routes->match(['get', 'post'], 'user/login', 'User::login');
$routes->get('user/logout', 'User::logout');

// 🔐 Protected Admin Routes (harus login)
$routes->group('admin', ['filter' => 'auth'], function($routes){
    $routes->get('artikel', 'Artikel::index');
});