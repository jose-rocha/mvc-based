<?php

namespace app\controllers;

class ContatoController
{
    public function show()
    {
        // Retorna a view contato.php
        return $this->view('contato');
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
