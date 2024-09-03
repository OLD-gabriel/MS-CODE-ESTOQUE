<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class ProdutoEditarController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            
        }else{
            $this->redirect("/login");
        }
    }


}
