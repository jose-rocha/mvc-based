<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        // Retorna a view home.php
        return $this->view('home');
    }

    private function view($viewName, $data = [])
    {
        // Extrai as variáveis para ficarem disponíveis na view
        extract($data);

        // Inclui a view
        $viewPath = __DIR__ . '/../../resources/views/' . $viewName . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            throw new \Exception("View {$viewName} não encontrada");
        }
    }
}
