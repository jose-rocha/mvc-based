<?php

namespace app\classes;

class ErrorHandler
{
    public static function handle404($method, $uri)
    {
        // Define o status HTTP 404
        http_response_code(404);

        // Usa o sistema de views para renderizar a página 404
        $view = new class () extends View {
            public function render404($method, $uri)
            {
                $data = [
                    'title' => '404 - Página não encontrada',
                    'method' => $method,
                    'uri' => $uri
                ];

                // Usa o layout error para a página 404
                $this->view('404', $data, 'error');
            }
        };

        $view->render404($method, $uri);
        exit;
    }

    public static function handleViewNotFound($viewName)
    {
        // Define o status HTTP 500 para erro interno
        http_response_code(500);

        echo "<h1>500 - Erro interno do servidor</h1>";
        echo "<p>A view '{$viewName}' não foi encontrada</p>";
        echo "<p>Este é um erro de desenvolvimento que precisa ser corrigido.</p>";
        echo "<a href='/'>Voltar ao início</a>";

        exit;
    }
}
