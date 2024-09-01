<?php

namespace App\Controller\login;

use App\Controller\AbstractController;

class EncerrarController extends AbstractController
{
    public function index(array $requestData): void
    {
        unset($_SESSION["NOME"]);
        unset($_SESSION["EMAIL"]);
        unset($_SESSION["LOGIN"]);

        $this->redirect("/login");
    }
}
