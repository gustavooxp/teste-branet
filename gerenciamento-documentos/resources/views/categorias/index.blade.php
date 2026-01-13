<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Branet Tecnologia</title>
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
            transition: all 0.3s;
        }
        
        .nav-link-branet:hover {
            color: white !important;
            opacity: 0.9;
        }
        
        /* Menu ativo sem destaque visual */
        .nav-link-branet.active {
            color: white !important;
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
            transition: all 0.3s;
        }
        
        .card-branet:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .form-control-branet {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control-branet:focus {
            border-color: var(--branet-secondary);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }
        
        .btn-branet-primary {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap;
        }
        
        .btn-branet-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(30, 58, 138, 0.2);
            color: white;
        }
        
        /* AJUSTE: Botão alinhado ao lado do campo - AJUSTADO */
        .form-alinhado {
            display: flex;
            gap: 1rem;
            align-items: flex-start; /* Mudado de flex-end para flex-start */
        }
        
        .form-alinhado .campo-texto {
            flex: 1;
        }
        
        .form-alinhado .btn-salvar {
            /* REMOVIDO: margin-bottom: 0.5rem; */
            margin-top: 2rem; /* Adicionado para alinhar com o input */
            height: 50px; /* Altura fixa para alinhar */
        }
        
        .table-branet {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
        }
        
        .table-branet thead {
            background: linear-gradient(135deg, var(--branet-primary), #2563eb);
            color: white;
        }
        
        .table-branet thead th {
            border: none;
            padding: 1rem 1.5rem;
            font-weight: 600;
        }
        
        .table-branet tbody tr {
            transition: all 0.2s;
        }
        
        .table-branet tbody tr:hover {
            background-color: #f8fafc;
        }
        
        .table-branet tbody td {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
        }
        
        .category-badge {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            color: var(--branet-primary);
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .category-id {
            color: var(--branet-primary);
            font-weight: 600;
            background: #f1f5f9;
            padding: 0.3rem 0.8rem;
            border-radius: 6px;
            font-size: 0.9rem;
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: #6b7280;
        }
        
        .empty-state-icon {
            font-size: 3.5rem;
            color: #d1d5db;
            margin-bottom: 1rem;
        }
        
        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
            
            .table-responsive {
                border-radius: 12px;
            }
            
            .table-branet {
                margin-bottom: 0;
            }
            
            /* Ajuste para mobile */
            .form-alinhado {
                flex-direction: column;
                align-items: stretch;
            }
            
            .form-alinhado .btn-salvar {
                height: auto;
                width: 100%;
                margin-top: 0.5rem; /* Ajustado para mobile */
                margin-bottom: 0;
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
                        <!-- Menu ativo sem destaque especial -->
                        <a class="nav-link nav-link-branet" href="/categorias">CATEGORIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet" href="/documentos">DOCUMENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet" href="/documentos/create">NOVO UPLOAD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">Gerenciamento de Categorias</h1>
            <p class="mb-0 opacity-90">Organize seus documentos por departamentos e tipos</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Formulário de Nova Categoria -->
        <div class="card-branet mb-4">
            <div class="card-body p-4">
                <h3 class="fw-semibold text-dark mb-4">
                    <i class="bi bi-plus-circle text-primary me-2"></i>Nova Categoria
                </h3>
                
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    <!-- AJUSTE: Formulário alinhado horizontalmente -->
                    <div class="form-alinhado">
                        <div class="campo-texto">
                            <label class="form-label fw-medium">Nome da Categoria</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-tag text-muted"></i>
                                </span>
                                <input type="text" 
                                       name="nome" 
                                       class="form-control form-control-branet border-start-0" 
                                       placeholder="Ex: Recursos Humanos, Financeiro, Jurídico, Marketing..."
                                       required
                                       maxlength="100">
                            </div>
                            <small class="text-muted mt-1 d-block">Use nomes descritivos para facilitar a organização</small>
                        </div>
                        
                        <div class="btn-salvar">
                            <!-- Botão perfeitamente alinhado ao lado do campo - AJUSTADO -->
                            <button class="btn btn-branet-primary h-100" type="submit">
                                <i class="bi bi-check-circle me-2"></i>Salvar Categoria
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Lista de Categorias -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-semibold text-dark mb-0">
                Categorias cadastradas: <span class="text-primary">{{ $categorias->count() }}</span>
            </h3>
            <div class="d-flex align-items-center">
                <span class="badge bg-light text-dark me-2">
                    <i class="bi bi-info-circle me-1"></i>As categorias são usadas para classificar documentos
                </span>
            </div>
        </div>

        @if($categorias->count() > 0)
            <div class="table-responsive">
                <table class="table table-branet">
                    <thead>
                        <tr>
                            <th width="100">ID</th>
                            <th>Nome da Categoria</th>
                            <th width="150">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $cat)
                            <tr>
                                <td>
                                    <span class="category-id">#{{ str_pad($cat->id, 3, '0', STR_PAD_LEFT) }}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <div style="width: 12px; height: 12px; border-radius: 50%; background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));"></div>
                                        </div>
                                        <div>
                                            <strong class="d-block">{{ $cat->nome }}</strong>
                                            <small class="text-muted">Criada em {{ \Carbon\Carbon::parse($cat->created_at)->format('d/m/Y') }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="category-badge">
                                        <i class="bi bi-check-lg"></i> Ativa
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Estatísticas -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card-branet p-3 text-center">
                        <div class="text-primary">
                            <i class="bi bi-folder fs-2"></i>
                        </div>
                        <h4 class="fw-bold mt-2">{{ $categorias->count() }}</h4>
                        <p class="text-muted mb-0">Categorias</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-branet p-3 text-center">
                        <div class="text-success">
                            <i class="bi bi-check-circle fs-2"></i>
                        </div>
                        <h4 class="fw-bold mt-2">{{ $categorias->count() }}</h4>
                        <p class="text-muted mb-0">Ativas</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-branet p-3 text-center">
                        <div class="text-warning">
                            <i class="bi bi-clock-history fs-2"></i>
                        </div>
                        <h4 class="fw-bold mt-2">{{ \Carbon\Carbon::parse($categorias->min('created_at'))->format('d/m/Y') }}</h4>
                        <p class="text-muted mb-0">Primeira criação</p>
                    </div>
                </div>
            </div>
        @else
            <!-- Estado vazio -->
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="bi bi-tags"></i>
                </div>
                <h4 class="fw-semibold mb-3">Nenhuma categoria cadastrada</h4>
                <p class="text-muted mb-4">
                    As categorias ajudam a organizar seus documentos por departamento ou tipo. 
                    Comece criando sua primeira categoria acima.
                </p>
                <div class="alert alert-info border-0 bg-light" style="border-left: 4px solid var(--branet-primary);">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-lightbulb fs-4 me-3 text-primary"></i>
                        <div>
                            <h6 class="mb-1">Sugestões de categorias</h6>
                            <p class="mb-0 small">Recursos Humanos, Financeiro, Jurídico, Marketing, TI, Compras, Vendas, Diretoria</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="footer-branet">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="navbar-brand-branet" style="font-size: 1.5rem;">Branet Tecnologia</div>
                    <p class="mb-0 opacity-75">Tecnologia para governança com sucesso</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="opacity-75">&copy; 2024 Branet Tecnologia. Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>