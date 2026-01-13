<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Documentos - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .card-menu {
            transition: transform 0.3s, shadow 0.3s;
            cursor: pointer;
            border: none;
        }
        .card-menu:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .icon-large {
            font-size: 3rem;
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-primary mb-5 shadow-sm">
        <div class="container">
            <span class="navbar-brand mb-0 h1"><i class="bi bi-file-earmark-text"></i> DocManager v1.0</span>
        </div>
    </nav>

    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-dark">Bem-vinda ao Sistema</h1>
            <p class="lead text-muted">Selecione uma categoria para começar a gerenciar seus arquivos.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-md-4">
                <a href="/categorias" class="text-decoration-none">
                    <div class="card card-menu h-100 shadow-sm text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-tags-fill text-primary icon-large"></i>
                            <h3 class="mt-3 text-dark">Categorias</h3>
                            <p class="text-muted">Gerencie os departamentos e tipos de documentos.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/documentos" class="text-decoration-none">
                    <div class="card card-menu h-100 shadow-sm text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-folder-fill text-warning icon-large"></i>
                            <h3 class="mt-3 text-dark">Documentos</h3>
                            <p class="text-muted">Faça upload, visualize e controle versões de arquivos.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/documentos/create" class="text-decoration-none">
                    <div class="card card-menu h-100 shadow-sm text-center p-4">
                        <div class="card-body">
                            <i class="bi bi-plus-circle-fill text-success icon-large"></i>
                            <h3 class="mt-3 text-dark">Novo Upload</h3>
                            <p class="text-muted">Envie um novo arquivo PDF, Imagem ou DOCX rapidamente.</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <footer class="text-center mt-5 text-muted">
            <small>&copy; 2026 - Teste Técnico Branet</small>
        </footer>
    </div>

</body>
</html>