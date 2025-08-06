# Sistema de Layouts MVC

## 🎯 Como Funciona

Agora você tem um sistema de layouts completo! Aqui está como usar:

### 📁 Estrutura Completa do Sistema

```
MVC_Based/
├── public/                  # Document root - Assets públicos
│   ├── index.php           # Ponto de entrada
│   ├── bootstrap.php       # Bootstrap da aplicação
│   ├── css/                # Arquivos CSS
│   │   ├── app.css         # CSS principal
│   │   ├── components/     # CSS de componentes
│   │   │   ├── navbar.css
│   │   │   ├── forms.css
│   │   │   └── cards.css
│   │   └── pages/          # CSS específico de páginas
│   │       ├── home.css
│   │       ├── contact.css
│   │       └── about.css
│   ├── js/                 # Arquivos JavaScript
│   │   ├── app.js          # JavaScript principal
│   │   ├── components/     # JS de componentes
│   │   └── pages/          # JS específico de páginas
│   ├── images/             # Imagens e assets visuais
│   │   ├── logo.png
│   │   ├── favicon.ico
│   │   ├── backgrounds/
│   │   ├── icons/
│   │   └── uploads/        # Uploads de usuários
│   └── fonts/              # Fontes customizadas
├── resources/views/         # Templates e layouts
│   ├── layouts/
│   │   ├── app.php         # Layout principal (header + footer)
│   │   └── error.php       # Layout para páginas de erro
│   ├── home.php            # Conteúdo da página home
│   ├── contato.php         # Conteúdo da página contato
│   ├── about.php           # Conteúdo da página sobre
│   └── 404.php             # Conteúdo da página 404
├── app/
│   ├── controllers/        # Controllers MVC
│   └── classes/            # Classes do sistema
└── routes/
    └── web.php             # Definição de rotas
```

### 🔧 Como Usar nos Controllers

```php
// Controller básico usando layout padrão
$this->view('home'); // Usa layout 'app' automaticamente

// Controller com dados e layout customizado
$this->view('home', $data, 'app'); // Layout específico

// View sem layout (apenas conteúdo)
$this->view('home', $data, false); // Sem layout
```

### 🎨 Como Referenciar Assets nos Layouts

No layout `app.php`, você pode referenciar os assets assim:

```php
<head>
    <!-- CSS Principal -->
    <link rel="stylesheet" href="/css/app.css">
    
    <!-- CSS de Componentes -->
    <link rel="stylesheet" href="/css/components/navbar.css">
    <link rel="stylesheet" href="/css/components/forms.css">
    
    <!-- CSS Específico da Página -->
    <?php if (isset($currentPage)): ?>
        <link rel="stylesheet" href="/css/pages/<?= $currentPage ?>.css">
    <?php endif; ?>
    
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.ico">
</head>

<body>
    <!-- Logo no Header -->
    <img src="/images/logo.png" alt="Logo">
    
    <!-- Conteúdo da página -->
    <?= $content ?>
    
    <!-- JavaScript -->
    <script src="/js/app.js"></script>
    
    <!-- JS Específico da Página -->
    <?php if (isset($currentPage)): ?>
        <script src="/js/pages/<?= $currentPage ?>.js"></script>
    <?php endif; ?>
</body>
```

### ✨ Benefícios

1. **Reutilização**: Header e footer em um só lugar
2. **Consistência**: Visual uniforme em todas as páginas  
3. **Manutenibilidade**: Mudança no layout afeta todas as páginas
4. **Flexibilidade**: Diferentes layouts para diferentes tipos de página
5. **Dados Dinâmicos**: Título, página ativa, etc.
6. **Assets Organizados**: CSS, JS e imagens estruturados por contexto
7. **Segurança**: Apenas pasta `public/` acessível via web
8. **Performance**: Facilita configuração de cache e CDN

### 🚀 Como Adicionar Uma Nova Página

1. **Crie a view** em `resources/views/minhapagina.php` (apenas conteúdo)
2. **Crie o controller** em `app/controllers/MinhaController.php`
3. **Adicione a rota** em `routes/web.php`
4. **[Opcional] Crie CSS específico** em `public/css/pages/minhapagina.css`
5. **[Opcional] Crie JS específico** em `public/js/pages/minhapagina.js`
6. A página automaticamente herda o layout!

### 🎯 Convenções de Nomenclatura

- **CSS**: `kebab-case` (ex: `main-layout.css`)
- **JS**: `camelCase` (ex: `formValidator.js`)  
- **Imagens**: `snake_case` ou `kebab-case` (ex: `user_avatar.png`)
- **Pastas**: `lowercase` (ex: `components`, `images`)
- **Views**: `lowercase` (ex: `home.php`, `contato.php`)

### 📊 Status do Sistema

✅ Sistema de rotas funcionando  
✅ Controllers organizados  
✅ Layouts reutilizáveis implementados  
✅ Tratamento de erro 404 elegante  
✅ Navegação ativa funcionando  
✅ Páginas responsivas  
✅ Estrutura de assets organizada  
✅ Separação de responsabilidades (MVC)  
✅ Sistema de templates flexível  

### 🛡️ Segurança e Performance

- **Document Root**: Apenas `public/` acessível via web
- **Proteção de Código**: Arquivos PHP fora do document root
- **Assets Otimizados**: Estrutura facilita minificação e compressão
- **Cache-Friendly**: Organização permite configuração eficiente de cache
- **SEO Ready**: URLs limpos e estrutura semântica

### 🔄 Exemplo de Fluxo Completo

```
1. Usuário acessa /contact
2. Router encontra rota → ContatoController::show()
3. Controller prepara dados e chama view('contato', $data)
4. Sistema carrega layout app.php
5. Layout inclui:
   - CSS: /css/app.css + /css/pages/contact.css
   - Conteúdo: resources/views/contato.php
   - JS: /js/app.js + /js/pages/contact.js
6. Página renderizada com layout completo
```

Seu sistema MVC agora está profissional, escalável e seguro! 🎉
