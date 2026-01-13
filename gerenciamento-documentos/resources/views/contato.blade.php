<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Branet Tecnologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --branet-primary: #1e3a8a;
            --branet-secondary: #0ea5e9;
            --branet-accent: #f59e0b;
            --branet-dark: #1f2937;
            --branet-light: #f8fafc;
            --branet-success: #10b981;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--branet-dark);
            background-color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .main-content {
            flex: 1;
        }
        
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
        
        .page-header {
            background: linear-gradient(135deg, var(--branet-primary) 0%, #2563eb 100%);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
        }
        
        .page-title {
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
        }
        
        .card-branet {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        
        .card-branet:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(30, 58, 138, 0.15);
        }
        
        .contact-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: white;
        }
        
        .icon-linkedin {
            background: linear-gradient(135deg, #0077b5, #00a0dc);
        }
        
        .icon-phone {
            background: linear-gradient(135deg, var(--branet-success), #34d399);
        }
        
        .icon-email {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
        }
        
        .contact-link {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }
        
        .contact-link:hover {
            color: var(--branet-primary);
        }
        
        .contact-info {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--branet-primary);
        }
        
        .btn-branet-outline {
            border: 1px solid var(--branet-primary);
            color: var(--branet-primary);
            background: white;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-outline:hover {
            background: var(--branet-primary);
            color: white;
        }
        
        .linkedin-btn {
            background: linear-gradient(135deg, #0077b5, #00a0dc);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .linkedin-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 119, 181, 0.2);
            color: white;
        }
        
        .whatsapp-btn {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .whatsapp-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(37, 211, 102, 0.2);
            color: white;
        }
        
        .contact-detail {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            margin-bottom: 1rem;
            transition: all 0.3s;
        }
        
        .contact-detail:hover {
            border-color: var(--branet-secondary);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .contact-detail i {
            font-size: 1.5rem;
            color: var(--branet-primary);
            min-width: 40px;
        }
        
        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2.5rem 0;
            margin-top: auto;
        }
        
        .footer-brand {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .footer-brand span:first-child {
            color: var(--branet-accent);
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
            
            .contact-detail {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
            
            .btn-group {
                flex-direction: column;
                width: 100%;
            }
            
            .btn-group .btn {
                width: 100%;
                margin-bottom: 0.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-branet">
        <div class="container">
            <a class="navbar-brand navbar-brand-branet" href="/">
                <span>Branet</span> Tecnologia
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet" href="/">INÍCIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet active" href="/contato">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h1 class="page-title">Entre em Contato</h1>
                    <p class="mb-0 opacity-90">Estou disponível para conversar sobre oportunidades e projetos</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="/" class="btn btn-branet-outline">
                        <i class="bi bi-arrow-left me-2"></i>Voltar para Início
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Informações de Contato -->
                    <div class="contact-info mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-person-circle fs-1 text-primary me-3"></i>
                            <div>
                                <h3 class="fw-bold mb-1">Gustavo Sperfeld Miranda</h3>
                                <p class="text-muted mb-0">Desenvolvedor Web - Candidato para Teste Técnico</p>
                            </div>
                        </div>
                        <p class="mb-0">Como estudante de Desenvolvimento de Sistemas e Sistemas de Informação, 
                            desenvolvi este sistema de gerenciamento de documentos para aplicar na prática 
                            os conhecimentos adquiridos. Estou entusiasmado com a possibilidade 
                            de contribuir com a equipe da Branet Tecnologia e continuar aprendendo.
                        

                        </p>
                    </div>

                    <!-- Cards de Contato -->
                    <div class="row g-4 mb-5">
                        <!-- LinkedIn -->
                        <div class="col-md-4">
                            <a href="https://www.linkedin.com/in/gustavo-sperfeld-miranda-1b89a3279/" 
                               target="_blank" 
                               class="contact-link">
                                <div class="card-branet text-center p-4 h-100">
                                    <div class="contact-icon icon-linkedin">
                                        <i class="bi bi-linkedin"></i>
                                    </div>
                                    <h4 class="fw-semibold mb-2">LinkedIn</h4>
                                    <p class="text-muted mb-3">Conecte-se comigo profissionalmente</p>
                                    <span class="text-primary fw-medium">Visitar perfil <i class="bi bi-box-arrow-up-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- WhatsApp -->
                        <div class="col-md-4">
                            <a href="https://wa.me/5548996026605" 
                               target="_blank" 
                               class="contact-link">
                                <div class="card-branet text-center p-4 h-100">
                                    <div class="contact-icon icon-phone">
                                        <i class="bi bi-whatsapp"></i>
                                    </div>
                                    <h4 class="fw-semibold mb-2">WhatsApp</h4>
                                    <p class="text-muted mb-3">Disponível para conversas</p>
                                    <span class="text-primary fw-medium">Enviar mensagem <i class="bi bi-whatsapp"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Email -->
                        <div class="col-md-4">
                            <a href="mailto:gustavosperfeldmiranda@gmail.com" class="contact-link">
                                <div class="card-branet text-center p-4 h-100">
                                    <div class="contact-icon icon-email">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <h4 class="fw-semibold mb-2">Email</h4>
                                    <p class="text-muted mb-3">Envie-me uma mensagem</p>
                                    <span class="text-primary fw-medium">Enviar email <i class="bi bi-send"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Detalhes de Contato -->
                    <div class="card-branet p-4 mb-5">
                        <h3 class="fw-semibold mb-4">Informações Diretas</h3>
                        
                        <!-- LinkedIn -->
                        <div class="contact-detail">
                            <i class="bi bi-linkedin"></i>
                            <div class="flex-grow-1">
                                <strong class="d-block">LinkedIn</strong>
                                <span>linkedin.com/in/gustavo-sperfeld-miranda-1b89a3279</span>
                            </div>
                            <a href="https://www.linkedin.com/in/gustavo-sperfeld-miranda-1b89a3279/" 
                               target="_blank" 
                               class="linkedin-btn btn">
                                <i class="bi bi-box-arrow-up-right me-2"></i>Acessar LinkedIn
                            </a>
                        </div>
                        
                        <!-- WhatsApp -->
                        <div class="contact-detail">
                            <i class="bi bi-whatsapp"></i>
                            <div class="flex-grow-1">
                                <strong class="d-block">WhatsApp / Telefone</strong>
                                <span>+55 (48) 9 9602-6605</span>
                                <small class="text-muted d-block">Disponível para ligações e mensagens</small>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="tel:+554896026605" class="btn btn-branet-outline">
                                    <i class="bi bi-telephone-outbound me-2"></i>Ligar
                                </a>
                                <a href="https://wa.me/554896026605" 
                                   target="_blank" 
                                   class="whatsapp-btn btn">
                                    <i class="bi bi-whatsapp me-2"></i>WhatsApp
                                </a>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="contact-detail">
                            <i class="bi bi-envelope-fill"></i>
                            <div class="flex-grow-1">
                                <strong class="d-block">Email</strong>
                                <span>gustavosperfeldmiranda@gmail.com</span>
                            </div>
                            <a href="mailto:gustavosperfeldmiranda@gmail.com" class="btn btn-branet-outline">
                                <i class="bi bi-send me-2"></i>Enviar Email
                            </a>
                        </div>
                    </div>

                    <!-- Mensagem Final -->
                    <div class="alert alert-light border text-center p-4" style="border-left: 4px solid var(--branet-accent);">
                        <i class="bi bi-chat-left-text fs-1 text-warning mb-3 d-block"></i>
                        <h4 class="fw-semibold mb-3">Obrigado pela oportunidade!</h4>
                        <p class="mb-0">
                            Este sistema de gerenciamento de documentos foi desenvolvido com dedicação para demonstrar minhas habilidades 
                            em desenvolvimento web full-stack com PHP, Laravel, Bootstrap e MySQL. Estou entusiasmado com a possibilidade 
                            de contribuir com a equipe da Branet Tecnologia.
                        </p>
                        <div class="mt-3">
                            <small class="text-muted">
                                <i class="bi bi-code-slash me-1"></i>
                                Tecnologias utilizadas: PHP 8, Laravel 10, Bootstrap 5, MySQL, HTML5, CSS3, JavaScript
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-branet">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="footer-brand">Branet Tecnologia</div>
                    <p class="mb-0 opacity-75">Tecnologia para governança com sucesso</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="opacity-75">&copy; 2026 Gustavo Sperfeld Miranda - Teste Técnico</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Adiciona confirmação ao clicar nos links de contato
        document.addEventListener('DOMContentLoaded', function() {
            const contactLinks = document.querySelectorAll('a[href^="tel:"]');
            contactLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (!confirm('Deseja realmente ligar para este número?')) {
                        e.preventDefault();
                    }
                });
            });
            
            // Formata o número de telefone para exibição
            const phoneElements = document.querySelectorAll('span:contains("+55 (48) 9 9602-6605")');
            phoneElements.forEach(el => {
                el.textContent = '+55 (48) 9 9602-6605';
            });
        });
    </script>
</body>
</html>