<?php

namespace app\controllers;

use app\classes\View;

class AboutController extends View
{
    public function show()
    {
        // Dados para passar para a view
        $data = [
            'title' => 'Sobre - MVC App',
            'currentPage' => 'about'
        ];

        // Retorna a view about.php usando o layout app
        return $this->view('about', $data);
    }
}
