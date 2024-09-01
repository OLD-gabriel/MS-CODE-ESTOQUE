<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CategoriaExcluirController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $categoria = (new Categoria());

            $escluir = $categoria->excluirCategoria($data["id"]);

            if($escluir){
                $_SESSION["NomeCategoriaExcluida"] = $data["nome"];
                $_SESSION["ExcluirCategoria"] = True;
                $this->redirect("/categorias");
            }           

        }else{
            $this->redirect("/login");
        }
    }


}
