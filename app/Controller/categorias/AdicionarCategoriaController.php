<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class AdicionarCategoriaController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $categoria = new Categoria();

            $inserir = $categoria->adicionarCategoria($data["nome-categoria"]);

            if($inserir){
                $_SESSION["NomeCategoria"] = $data["nome-categoria"];
                $_SESSION["AddCategoria"] = True;
                $this->redirect("/categorias");
            }
        }else{
            $this->redirect("/login");
        }
    }
}
