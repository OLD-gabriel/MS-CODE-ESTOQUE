<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;

class AdicionarCategoriaController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            
            




        }else{
            $this->redirect("/login");
        }
    }
}
