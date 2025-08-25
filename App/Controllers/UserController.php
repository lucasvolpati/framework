<?php

namespace App\Controllers;

use Laminas\Diactoros\{Response\JsonResponse};
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class UserController
{
    public function getUser(ServerRequestInterface $request): ResponseInterface
    {
        return  new JsonResponse(
            ['name' => 'Lucas']
        );
    }
}