<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/stripe', 'StripeController::index');
$routes->post('/stripe/create-charge', 'StripeController::createCharge');

