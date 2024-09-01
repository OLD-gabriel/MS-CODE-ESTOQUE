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
                $_SESSION["LOGIN"] = True;

                $_SESSION["NOME"] = $usuario[0]["nome"];
                $_SESSION["EMAIL"] = $usuario[0]["email"];
                $this->redirect('/app');
            }else{
                $_SESSION["SenhaIncorreta"] = True;
                $this->redirect('/login');
            }
        }
    }
}
