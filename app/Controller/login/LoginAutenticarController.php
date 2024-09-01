<?php

namespace App\Controller\login;

use App\Controller\AbstractController;
use App\Model\Usuario;

class LoginAutenticarController extends AbstractController
{
    public function index(array $requestData): void
    {
        $usuarioConexao = new Usuario();
        $usuario = $usuarioConexao->buscarPorEmail($requestData['email']);
        if (null === $usuario || $usuario == false) {
            $this->redirect('/error');
        }else{
            if(password_verify($requestData["password"],$usuario[0]["senha"])){
                $this->redirect('/app');
            }else{
                $_SESSION["SenhaIncorreta"] = True;
                $this->redirect('/login');
            }
        }
    }
}
