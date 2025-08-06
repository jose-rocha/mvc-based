<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MVC App' ?></title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">MVC App</div>
            <ul class="nav-links">
                <li><a href="/" class="<?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="/contact" class="<?= ($currentPage ?? '') === 'contact' ? 'active' : '' ?>">Contato</a>
                </li>
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