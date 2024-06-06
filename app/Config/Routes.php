<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test-connection', 'DatabaseTestController::testConnection');
// Rute Login
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attemptLogin');

// Rute Logout
$routes->get('logout', 'AuthController::logout');

// Rute Dashboard
$routes->get('dashboard', 'DashboardController::index');

// Rute Dashboard
$routes->get('dashboard1', 'DashboardController::dashboard1');

// Rute Data-criteria
$routes->get('data-criteria', 'DashboardController::dataCriteria');

// Rute add-form-data-criteria
$routes->get('data-criteria/add-data', 'SpkRouterController::create');
$routes->post('data-criteria/store', 'SpkRouterController::store');

// Rute edit-form-data-criteria
$routes->get('data-criteria/edit/(:num)', 'SpkRouterController::edit/$1');
$routes->post('data-criteria/update/(:num)', 'SpkRouterController::update/$1');
$routes->get('data-criteria/delete/(:num)', 'SpkRouterController::delete/$1');


// Rute Process-DSS
$routes->get('process-dss', 'DashboardController::processDss');
$routes->get('process-dss/hitung', 'SpkRouterController::hitung');
// Rute Output
$routes->get('output', 'DashboardController::output');
// Rute form-data-criteria
$routes->get('form', 'DashboardController::form');
