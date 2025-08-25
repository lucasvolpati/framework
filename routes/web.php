<?php

use App\Controllers\UserController;
use League\Route\Router;

/** @var Router $router */

$router->get('/', [UserController::class, 'getUser']);

$router->get('/about', function () {
    return ['app' => 'Meu micro framework', 'version' => '0.1'];
});