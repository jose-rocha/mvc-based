<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - MVC App</title>
</head>
<body>
    <h1>Página de Contato</h1>
    <p>Entre em contato conosco!</p>
    <nav>
        <a href="/">Home</a>
        <a href="/contact">Contato</a>
    </nav>
    
    <form>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
