<?php

namespace App\Controller;

class ProdutosController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render(viewName:'produtos/produtos.php');
    }
}
