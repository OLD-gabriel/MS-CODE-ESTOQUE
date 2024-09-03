<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CategoriasController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $query = new Categoria();      
            $categorias = $query->categorias();
            $this->render(viewName:'categoria/categorias.php', data: $categorias,title: "Categorias");

        }else{
            $this->redirect("/login");
        }
    }


}
