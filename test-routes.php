<?php

// Script de teste para verificar se o sistema está funcionando
echo "🧪 Testando sistema de rotas...\n\n";

// Simular diferentes requisições
$testCases = [
    ['method' => 'GET', 'uri' => '/'],
    ['method' => 'GET', 'uri' => '/contact'],
    ['method' => 'GET', 'uri' => '/rota-inexistente'],
    ['method' => 'POST', 'uri' => '/'],
];

foreach ($testCases as $test) {
    echo "Testando: {$test['method']} {$test['uri']}\n";

    // Simular superglobais
    $_SERVER['REQUEST_METHOD'] = $test['method'];
    $_SERVER['REQUEST_URI'] = $test['uri'];

    echo "Resultado: ";

    try {
        // Incluir o sistema de rotas
        ob_start();
        include __DIR__ . '/routes/web.php';
        $output = ob_get_clean();

        if (!empty($output)) {
            echo "Página carregada com sucesso ✅\n";
        } else {
            echo "Sem output ⚠️\n";
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage() . " ❌\n";
    }

    echo "---\n";
}

echo "\n✨ Testes concluídos!\n";
