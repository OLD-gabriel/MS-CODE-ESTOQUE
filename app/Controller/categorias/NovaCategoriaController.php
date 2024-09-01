<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;

class NovaCategoriaController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $this->render(viewName:'categoria/novaCategoria.php');
        }else{
            $this->redirect("/login");
        }
    }
}
