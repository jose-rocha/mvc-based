<?php

namespace app\controllers\classes;

class Routes
{
    public static function load($routes, $uri)
    {
        if (!array_key_exists($uri, $routes)) {
            throw new \Exception("Rota {$uri} não existe");
            /* criar um arquico de páina não encontrada e
                retornar ao invés do o errro -> Rota {$uri} não existe
            */
        }

    }
}
