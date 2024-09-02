<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CategoriasController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $categorias = new Categoria();      
            $this->render(viewName:'categoria/categorias.php', data: $categorias->categorias());

        }else{
            $this->redirect("/login");
        }
    }


}
