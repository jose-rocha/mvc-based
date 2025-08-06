<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MVC App' ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }
        
        header {
            background: #333;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.3s ease;
        }
        
        .nav-links a:hover,
        .nav-links a.active {
            background: #555;
        }
        
        main {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            min-height: 60vh;
        }
        
        .content {
            padding: 2rem;
        }
        
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 2rem;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .footer-links {
            margin-top: 1rem;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            margin: 0 1rem;
        }
        
        .footer-links a:hover {
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">MVC App</div>
            <ul class="nav-links">
                <li><a href="/" class="<?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="/contact" class="<?= ($currentPage ?? '') === 'contact' ? 'active' : '' ?>">Contato</a></li>
                <li><a href="/about" class="<?= ($currentPage ?? '') === 'about' ? 'active' : '' ?>">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; <?= date('Y') ?> MVC App. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="/">Home</a>
                <a href="/contact">Contato</a>
                <a href="/about">Sobre</a>
                <a href="/privacy">Privacidade</a>
            </div>
        </div>
    </footer>
</body>
</html>
