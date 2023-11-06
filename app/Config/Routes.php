<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group("api", function ($routes) {
    $routes->group("auth", function ($routes) {
        $routes->post("register", "Api\Auth\RegisterController::index");
        $routes->post("login", "Api\Auth\LoginController::index");
    });
    $routes->group("user", function ($routes) {
        $routes->get("profile", "Api\User\ProfileController::index", ['filter' => 'authFilter']);
    });
});
