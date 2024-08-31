<?php

namespace App\Controller;

use App\Model\Usuario;

class AutenticarController extends AbstractController
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
