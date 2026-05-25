<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

$routes->match(['get', 'post'], '/user/login', 'User::login');
$routes->get('/user/logout', 'User::logout');

$routes->get('/admin/artikel', 'Artikel::admin_index');

$routes->match(['get', 'post'],
    '/admin/artikel/add',
    'Artikel::add'
);

$routes->match(['get', 'post'],
    '/admin/artikel/edit/(:num)',
    'Artikel::edit/$1'
);

$routes->get(
    '/admin/artikel/delete/(:num)',
    'Artikel::delete/$1'
);