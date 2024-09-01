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

    public function adicionarCategoria($nome){

        $dados = [
            "nome" => $nome
        ];

        $inserir = $this->query->insert("categoria",$dados);

        return $inserir;

    }
}
