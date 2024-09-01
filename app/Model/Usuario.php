<?php

namespace App\Model;

use App\Database\Database;
use App\Database\Query;

class Usuario
{
    private Query $query;

    public function __construct()
    {
        $this->query = new Query();
    }

    public function buscarPorEmail(string $email): array|bool
    {
        $usuario = $this->query->select('usuario', "email = '{$email}'");

        return $usuario;
    }

    public function inserirUsuario(string $nome,string $email,string $senha) : bool
    {
        $dados = [
            "nome" => $nome,
            "email" => $email,
            "senha" => $senha
        ];

        $inserir = $this->query->insert("usuario",$dados);

        return $inserir;
    }
}
