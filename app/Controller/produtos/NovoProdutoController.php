<?php

namespace App\Controller\produtos;

use App\Controller\AbstractController;
use App\Model\Categoria;
class NovoProdutoController extends AbstractController
{
    public function index(array $data): void
    {
        if(isset($_SESSION["LOGIN"])){
            $query = new Categoria();          

            $dados = [
                "categorias" => $query->categorias()
            ];

            $this->render(viewName:'produtos/NovoProduto.php',data: $dados);
        }else{
            $this->redirect("/login");
        }
    }
}
