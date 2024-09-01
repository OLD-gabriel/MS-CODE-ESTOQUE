<?php

namespace App\Controller\login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class RegisterAutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        if($requestData["password"] == $requestData["confirm_password"]){
            $senha_hash = password_hash($requestData["password"], PASSWORD_DEFAULT);
            $inserir = new Usuario();
            $query = $inserir->inserirUsuario($requestData["username"],$requestData["email"],$senha_hash);
            if($query){
                $this->redirect('/login');
            }
        }else{
            $_SESSION["SenhaIncorreta"] = True;
            $this->redirect('/register');
        }
    }
}
