<?php

use App\Controller\Error\NotFoundController;
use App\Controller\login\LoginController;
use App\Controller\login\LoginAutenticarController;
use App\Controller\login\RegisterAutenticarController;
use App\Controller\login\EncerrarController;
use App\Controller\login\RegisterController;
use App\Controller\categorias\CategoriasController;
use App\Controller\categorias\NovaCategoriaController;
use App\Controller\categorias\AdicionarCategoriaController;
use App\Controller\ProdutosController;

$router = [
    'routes' => [
        '/'                     => LoginController::class,
        '/login'                => LoginController::class,
        '/login/autenticar'     => LoginAutenticarController::class,
        '/app'                  => ProdutosController::class,
        '/register'             => RegisterController::class,
        '/register/autenticar'  => RegisterAutenticarController::class,
        '/sair'                 => EncerrarController::class,
        '/categorias'           => CategoriasController::class,
        '/nova/categoria'       => NovaCategoriaController::class,
        '/categoria/adicionar'  => AdicionarCategoriaController::class
    ],
    'default'                   => NotFoundController::class
];
