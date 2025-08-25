<?php

require 'vendor/autoload.php';

use Laminas\Diactoros\{
    ResponseFactory,
    ServerRequestFactory
};
use League\Route\Router;
use League\Route\Strategy\JsonStrategy;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

$request = ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$responseFactory = new ResponseFactory();
$strategy = new JsonStrategy($responseFactory);
$router   = (new Router)->setStrategy($strategy);

require __DIR__ . '/routes/web.php';

$response = $router->dispatch($request);

new SapiEmitter()->emit($response);