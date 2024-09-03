<?php

namespace App\Controller\produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class ProdutosController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $query = new Produto();
            $produtos = $query->produto();
            $this->render(viewName:'produtos/produtos.php',data: $produtos,title: "Produtos");
        }else{
            $this->redirect("/login");
        }
    }
}
