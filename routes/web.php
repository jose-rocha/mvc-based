<?php

use app\controllers\AboutController;
use app\controllers\ContatoController;
use app\controllers\HomeController;

// echo 'web';

$routes = [
    [
        'method' => 'GET',
        'path' => '/',
        'controller' => HomeController::class,
        'action' => 'index'
    ],
    [
        'method' => 'GET',
        'path' => '/contact',
        'controller' => ContatoController::class,
        'action' => 'show'
    ],
    [
        'method' => 'GET',
        'path' => '/about',
        'controller' => AboutController::class,
        'action' => 'show'
    ],
];


// $uri = Uri::load();


// require Routes::load($routes, $uri);
// $uri = parse_url($_SERVER['REQUEST_URI']);
/*
 Aqui pega como array assim  array:1 [▼
  "path" => "/uri_aqui"
]
*/
$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); /* Aqui pega como array assim  "/uri_aqui"*/
$currentRequest = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, DELETE, etc.

// Procurar por uma rota que corresponda ao método e caminho
$routeFound = null;
foreach ($routes as $route) {
    [$method, $path, $controller, $action] = array_values($route);

    if ($currentRequest === $method && $currentUri === $path) {
        $routeFound = $route;

        // Instanciar o controller e executar a action
        $controllerInstance = new $controller(); // Ajuda do Copilot
        $controllerInstance->$action(); // Ajuda do Copilot
        break;
    }
}

// Se não encontrou a rota, lança exceção
if ($routeFound === null) {
    // echo 'Rota não encontarda';
    throw new \Exception("Rota {$currentRequest} {$currentUri} não existe");
}
