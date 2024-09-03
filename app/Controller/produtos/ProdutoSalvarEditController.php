<?php

namespace App\Controller\produtos;

use App\Controller\AbstractController;
use App\Model\Produto;

class ProdutoSalvarEditController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
           
            $id = $data["id"];

            $dados = [
                "nome"                  => $data["nome"],
                "descricao"             => $data["descricao"],
                "categoria_id"          => $data["categoria"],
                "quantidade_inicial"    => $data["quantidade"],
                "quantidade_disponivel" => $data["quantidade"],
                "valor"                 => $data["valor"]
            ];


            $query = new Produto();
            $edicao = $query->editarProduto($id, $dados);
            if($edicao){
                $_SESSION["NomeProdutoEditado"] = $data["nome"];
                $_SESSION["EditarProduto"] = True;
                $this->redirect("/app");
            }
        }else{
            $this->redirect("/login");
        }
    }


}
