<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class ProdutoExcluirController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $Produto = (new Produto());

            $excluir = $Produto->excluirProduto($data["id"]);

            if($excluir){
                $_SESSION["NomeProdutoExcluida"] = $data["nome"];
                $_SESSION["ExcluirProduto"] = True;
                $this->redirect("/app");
            }           

        }else{
            $this->redirect("/login");
        }
    }


}
