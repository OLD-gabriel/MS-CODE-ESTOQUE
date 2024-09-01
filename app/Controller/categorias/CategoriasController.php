<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;

class CategoriasController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $this->render(viewName:'categoria/categorias.php');
        }else{
            $this->redirect("/login");
        }
    }
}
