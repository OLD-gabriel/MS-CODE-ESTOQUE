<?php

namespace App\Controller\produtos;

use App\Controller\AbstractController;
use App\Model\Produto;
class AdicionarProdutoController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){

            $dataDia = new \DateTime();
            $dataFormatada = $dataDia->format("Y-m-d");

            $dados = [
                "nome"                  => $data["nome"],
                "descricao"             => $data["descricao"],
                "categoria_id"          => $data["categoria"],
                "data_cadastro"         => $dataFormatada,
                "quantidade_inicial"    => $data["quantidade"],
                "quantidade_disponivel" => $data["quantidade"],
                "valor"                 => $data["valor"]
            ];

            $produto = new Produto();
            $inserir = $produto->adicionarProduto($dados);

            if($inserir){
                $_SESSION["AdicionarProduto"] = True;
                $_SESSION["NomeProduto"] = $data["nome"];
                $this->redirect("/app");
            }

        }else{
            $this->redirect("/login");
        }
    }
}
