<?php

namespace app\controllers;

use app\classes\View;

class HomeController extends View
{
    public function index()
    {
        // Dados para passar para a view
        $data = [
            'title' => 'Home - MVC App',
            'currentPage' => 'home'
        ];

        // Retorna a view home.php usando o layout app
        return $this->view('home', $data);
    }
}
