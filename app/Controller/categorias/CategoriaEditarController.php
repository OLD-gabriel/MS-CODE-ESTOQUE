<?php

namespace App\Controller\categorias;

use App\Controller\AbstractController;
use App\Model\Categoria;

class CategoriaEditarController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $id = $data['id'];

            $query = new Categoria();
            $categoria = $query->pegaCategoria($id);

            $dados = [
                "categoria" => $categoria
            ];
    
            $this->render('categoria/CategoriaEditar.php', $dados);
        }else{
            $this->redirect("/login");
        }
    }


}
