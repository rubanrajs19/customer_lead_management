<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'AuthController::register');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::attemptRegister');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');

$routes->get('customers', 'CustomerController::index');
$routes->get('customers/create', 'CustomerController::create');
$routes->post('customers', 'CustomerController::store');
$routes->get('customers/edit/(:num)', 'CustomerController::edit/$1');
$routes->post('customers/update/(:num)', 'CustomerController::update/$1');
$routes->get('customers/delete/(:num)', 'CustomerController::delete/$1');

$routes->get('leads', 'LeadController::index');
$routes->get('leads/create', 'LeadController::create');
$routes->post('leads', 'LeadController::store');
$routes->get('leads/edit/(:num)', 'LeadController::edit/$1');
$routes->post('leads/update/(:num)', 'LeadController::update/$1');
$routes->get('leads/delete/(:num)', 'LeadController::delete/$1');


$routes->get('dashboard', 'DashboardController::index');
