<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .error-container {
        text-align: center;
        background: white;
        padding: 3rem;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        max-width: 500px;
    }

    .error-code {
        font-size: 6rem;
        font-weight: bold;
        color: #667eea;
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .error-message {
        font-size: 1.5rem;
        color: #333;
        margin: 1rem 0;
    }

    .error-description {
        color: #666;
        margin: 1rem 0 2rem;
        line-height: 1.6;
    }

    .btn-home {
        display: inline-block;
        background: #667eea;
        color: white;
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-home:hover {
        background: #5a6fd8;
    }

    .error-details {
        margin-top: 2rem;
        padding: 1rem;
        background: #f8f9fa;
        border-radius: 5px;
        font-family: monospace;
        color: #666;
        border-left: 4px solid #667eea;
    }
    </style>
</head>

<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">Página não encontrada</div>
        <div class="error-description">
            A página que você está procurando não existe ou foi movida.
        </div>

        <a href="/" class="btn-home">Voltar ao Início</a>

        <div class="error-details">
            <strong>Rota solicitada:</strong> <?= $method ?? 'GET' ?> <?= $uri ?? '/' ?>
        </div>
    </div>
</body>

</html>