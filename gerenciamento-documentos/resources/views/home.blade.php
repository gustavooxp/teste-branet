<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branet Tecnologia - Gerenciador de Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts para um visual mais profissional -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --branet-primary: #1e3a8a;
            /* Azul escuro profissional */
            --branet-secondary: #0ea5e9;
            /* Azul claro */
            --branet-accent: #f59e0b;
            /* Laranja/dourado para destaques */
            --branet-dark: #1f2937;
            /* Cinza escuro para textos */
            --branet-light: #f8fafc;
            /* Fundo claro */
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--branet-dark);
            background-color: #ffffff;
            line-height: 1.6;
        }

        /* Header estilo Branet */
        .navbar-branet {
            background-color: var(--branet-primary) !important;
            padding: 1rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand-branet {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
            letter-spacing: -0.5px;
        }

        .navbar-brand-branet span:first-child {
            color: var(--branet-accent);
        }

        .nav-link-branet {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            padding: 0.5rem 1.2rem !important;
            transition: color 0.3s;
        }

        .nav-link-branet:hover {
            color: var(--branet-accent) !important;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--branet-primary) 0%, #2563eb 100%);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
        }

        .hero-title {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Cards estilo profissional */
        .card-branet {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
            height: 100%;
        }

        .card-branet:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(30, 58, 138, 0.15);
            border-color: var(--branet-secondary);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.2rem;
            color: white;
        }

        .icon-primary {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
        }

        .icon-warning {
            background: linear-gradient(135deg, #f59e0b, #fbbf24);
        }

        .icon-success {
            background: linear-gradient(135deg, #10b981, #34d399);
        }

        .card-title-branet {
            font-weight: 600;
            color: var(--branet-dark);
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
        }

        .card-text-branet {
            color: #6b7280;
            font-size: 0.95rem;
        }

        /* Footer */
        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2.5rem 0;
            margin-top: 5rem;
        }

        .footer-brand {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .footer-brand span:first-child {
            color: var(--branet-accent);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .navbar-nav {
                background-color: var(--branet-primary);
                padding: 1rem;
                border-radius: 8px;
                margin-top: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header estilo Branet -->
    <nav class="navbar navbar-expand-lg navbar-branet">
        <div class="container">
            <a class="navbar-brand navbar-brand-branet" href="#">
                <span>Branet</span> Tecnologia
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet active" href="#">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet" href="/contato">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">TECNOLOGIA PARA GOVERNANÇA COM SUCESSO</h1>
            <p class="hero-subtitle">Sistema de gerenciamento de documentos desenvolvido com as melhores práticas de
                tecnologia e segurança empresarial.</p>
        </div>
    </div>

    <!-- Conteúdo Principal -->
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark mb-3">Gerenciador de Documentos</h2>
            <p class="text-muted">Selecione uma categoria para começar a gerenciar seus arquivos com eficiência e
                segurança.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <a href="/categorias" class="text-decoration-none">
                    <div class="card card-branet p-4">
                        <div class="card-body text-center">
                            <div class="card-icon icon-primary">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <h3 class="card-title-branet">Categorias</h3>
                            <p class="card-text-branet">Gerencie departamentos e tipos de documentos com organização
                                inteligente.</p>
                            <span class="text-primary fw-medium">Acessar <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="/documentos" class="text-decoration-none">
                    <div class="card card-branet p-4">
                        <div class="card-body text-center">
                            <div class="card-icon icon-warning">
                                <i class="bi bi-folder-fill"></i>
                            </div>
                            <h3 class="card-title-branet">Documentos</h3>
                            <p class="card-text-branet">Controle versões, visualize e gerencie todos os arquivos da
                                empresa.</p>
                            <span class="text-primary fw-medium">Acessar <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="/documentos/create" class="text-decoration-none">
                    <div class="card card-branet p-4">
                        <div class="card-body text-center">
                            <div class="card-icon icon-success">
                                <i class="bi bi-plus-circle-fill"></i>
                            </div>
                            <h3 class="card-title-branet">Novo Upload</h3>
                            <p class="card-text-branet">Envie documentos PDF, imagens ou DOCX com segurança e rapidez.
                            </p>
                            <span class="text-primary fw-medium">Acessar <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Informações adicionais -->
        <div class="row mt-5 pt-4">
            <div class="col-12">
                <div class="alert alert-info border-0 bg-light" style="border-left: 4px solid var(--branet-primary);">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-shield-check fs-4 me-3 text-primary"></i>
                        <div>
                            <h5 class="mb-1">Segurança e Conformidade</h5>
                            <p class="mb-0">Todos os documentos são armazenados com criptografia de ponta a ponta,
                                garantindo conformidade com LGPD e regulamentações do setor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-branet mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="footer-brand">Branet Tecnologia</div>
                    <p class="mb-0 opacity-75">Tecnologia para governança com sucesso</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="opacity-75">&copy; 2026 Branet Tecnologia - Teste Técnico. Todos os direitos
                        reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>