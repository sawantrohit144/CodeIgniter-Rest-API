<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->options('(:any)','OptionsController::options');

$routes->group('api', function($routes){
  $routes->group('mobile', function($routes){
    $routes->get('findall', 'MobileRestController::findAll');
    $routes->get('find/(:any)', 'MobileRestController::find/$1');
    $routes->post('create', 'MobileRestController::create');
    $routes->put('update', 'MobileRestController::update');
    $routes->delete('delete/(:any)', 'MobileRestController::delete/$1');
  });
});
