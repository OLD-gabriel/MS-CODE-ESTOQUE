<?php

namespace App\Controller\produtos;

use App\Controller\AbstractController;

class ProdutosController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $this->render(viewName:'produtos/produtos.php');
        }else{
            $this->redirect("/login");
        }
    }
}
