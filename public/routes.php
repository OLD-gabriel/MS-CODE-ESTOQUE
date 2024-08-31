<?php

use App\Controller\AutenticarController;
use App\Controller\Error\NotFoundController;
use App\Controller\LoginController;
use App\Controller\ProdutosController;

$router = [
    'routes' => [
        '/' => LoginController::class,
        '/login' => LoginController::class,
        '/login/autenticar' => AutenticarController::class,
        '/app' => ProdutosController::class
    ],
    'default' => NotFoundController::class
];
