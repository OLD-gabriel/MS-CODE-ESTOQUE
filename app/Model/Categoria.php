<?php

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class Categoria
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function adicionarCategoria($nome): bool
    {

        $dados = [
            "nome" => $nome
        ];

        $inserir = $this->query->insert("categoria",$dados);

        return $inserir;

    }

    public function categorias(): array
    {
        $categorias = $this->query->select("categoria");

        return $categorias;
    }

    public function excluirCategoria($id): bool
    {
        $excluir = $this->query->delete("categoria","id = {$id}");
        
        return $excluir;
    }
}
