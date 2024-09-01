<?php

namespace App\Controller\login;

use App\Controller\AbstractController;

class RegisterController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render(viewName:'login/register.php',simple: true);
    }
}
