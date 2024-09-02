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
use App\Controller\categorias\CategoriaExcluirController;
use App\Controller\produtos\ProdutosController;
use App\Controller\produtos\NovoProdutoController;
use App\Controller\produtos\AdicionarProdutoController;

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
        '/categoria/nova'       => NovaCategoriaController::class,
        '/categoria/adicionar'  => AdicionarCategoriaController::class,
        '/categoria/excluir'    => CategoriaExcluirController::class,
        '/produto/novo'         => NovoProdutoController::class,
        '/produto/adicionar'    => AdicionarProdutoController::class
    ],
    'default'                   => NotFoundController::class
];
