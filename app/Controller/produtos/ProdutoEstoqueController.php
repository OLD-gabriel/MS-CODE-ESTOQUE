<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class ProdutoEstoqueController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $id = $data["id"];

            $quantidade = $data["acao"] == "diminuir" ? $data["quantidade"] - 1 : $data["quantidade"] + 1;

            $query = new Produto();
            $aumentar = $query->aumentarEstoque($id, $quantidade);

            if($aumentar){
                $_SESSION["Estoque"] = $data["acao"] == "diminuir" ? "diminuido" : "aumentado";
                $_SESSION["NomeProduto"] = $data["nome"];
                $this->redirect("/app");
            }

        }else{
            $this->redirect("/login");
        }
    }


}
