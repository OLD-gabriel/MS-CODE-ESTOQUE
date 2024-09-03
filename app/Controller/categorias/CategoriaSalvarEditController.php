<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CategoriaSalvarEditController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
           
            $id = $data["id"];
            $nome = $data["nome"];

            $query = new Categoria();
            $edicao = $query->editarCategoria($id,$nome);
            if($edicao){
                $_SESSION["NomeProdutoEditadoAntes"] = $data["NomeProdutoAntes"];
                $_SESSION["NomeProdutoEditadoDepois"] = $data["nome"];
                $_SESSION["EditarProduto"] = True;
                $this->redirect("/categorias");
            }
        }else{
            $this->redirect("/login");
        }
    }


}
