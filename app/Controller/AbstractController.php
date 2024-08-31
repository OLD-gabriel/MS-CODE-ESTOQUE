<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, array $data = [],bool $simple = false): void
    {
        if($simple == false){
            require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/includes/header.php');
            require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
            require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/includes/footer.php');
        }else{
            require_once($_SERVER['DOCUMENT_ROOT'] . '/' . '/view/' . $viewName);
        }
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    /** Deve fazer o include da view */
    abstract public function index(array $requestData): void;
}
