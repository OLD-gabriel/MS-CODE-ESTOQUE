<?php

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class Produto
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function adicionarProduto($dados): bool
    {
        $inserir =  $this->query->insert("produto",$dados);
        
        return $inserir;
    }

    public function produto(): array 
    {
        $select = $this->query->select("produto");

        return $select;
    }

    public function excluirProduto($id): bool
    {
        $excluir = $this->query->delete("produto","id = {$id}");
        
        return $excluir;
    }

    public function pegaProduto(int $id): array
    {
        return $this->query->select('produto', "id = {$id}")[0];
    }

    public function editarProduto(int $id, array $dados): bool
    {

        $update = $this->query->update('produto', $dados, "id = {$id}");

        return $update;
    }

    public function aumentarEstoque(int $id, int $quantidade): bool
    {
        $update = $this->query->update("produto",["quantidade_disponivel" => $quantidade], "id = {$id}");

        return $update;
    }
}
