<?php

namespace app\controllers;

use app\classes\View;

class ContatoController extends View
{
    public function show()
    {
        // Dados para passar para a view
        $data = [
            'title' => 'Contato - MVC App',
            'currentPage' => 'contact'
        ];

        // Retorna a view contato.php usando o layout app
        return $this->view('contato', $data);
    }
}
