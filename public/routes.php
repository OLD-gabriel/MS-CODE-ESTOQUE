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
use App\Controller\categorias\CategoriaEditarController;
use App\Controller\categorias\CategoriaSalvarEditController;
use App\Controller\produtos\ProdutosController;
use App\Controller\produtos\NovoProdutoController;
use App\Controller\produtos\AdicionarProdutoController;
use App\Controller\produtos\ProdutoExcluirController;
use App\Controller\produtos\ProdutoEditarController;
use App\Controller\produtos\ProdutoSalvarEditController;
use App\Controller\produtos\ProdutoEstoqueController;

$router = [
    'routes' => [
        '/'                     => LoginController::class,
        ''                      => LoginController::class,
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
        '/categoria/editar'     => CategoriaEditarController::class,
        '/categorias/salvar'    => CategoriaSalvarEditController::class,
        '/produto/novo'         => NovoProdutoController::class,
        '/produto/adicionar'    => AdicionarProdutoController::class,
        '/produto/excluir'      => ProdutoExcluirController::class,
        '/produto/editar'       => ProdutoEditarController::class,
        '/produto/salvar'       => ProdutoSalvarEditController::class,
        '/produto/estoque'      => ProdutoEstoqueController::class
    ],
    'default'                   => NotFoundController::class
];
