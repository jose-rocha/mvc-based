<?php

namespace app\classes;

class View
{
    protected function view($viewName, $data = [], $layout = 'app')
    {
        // Extrai as variáveis para ficarem disponíveis na view
        extract($data);

        // Caminho da view
        $viewPath = __DIR__ . '/../../resources/views/' . $viewName . '.php';

        if (!file_exists($viewPath)) {
            ErrorHandler::handleViewNotFound($viewName);
            return;
        }

        // Se não usar layout, inclui a view diretamente
        if ($layout === false || $layout === null) {
            require $viewPath;
            return;
        }

        // Captura o conteúdo da view
        ob_start();
        require $viewPath;
        $content = ob_get_clean();

        // Caminho do layout
        $layoutPath = __DIR__ . '/../../resources/views/layouts/' . $layout . '.php';

        if (!file_exists($layoutPath)) {
            ErrorHandler::handleViewNotFound("layouts/{$layout}");
            return;
        }

        // Inclui o layout com o conteúdo da view
        require $layoutPath;
    }
}
