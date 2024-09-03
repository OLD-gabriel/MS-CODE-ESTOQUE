<?php

namespace App\Controller\Produtos;

use App\Controller\AbstractController;
use App\Model\Produto;
use App\Model\Categoria;

class ProdutoEditarController extends AbstractController
{
    public function index(array $data): void
    { 
        if(isset($_SESSION["LOGIN"])){
            $id = $data['id'];

            $query = new Produto();
            $produto = $query->pegaProduto($id);

            $query = new Categoria();          

            $dados = [
                "categorias" => $query->categorias(),
                "produto"   => $produto
            ];


            $this->render('produtos/ProdutoEditar.php', $dados);
        }else{
            $this->redirect("/login");
        }
    }


}
