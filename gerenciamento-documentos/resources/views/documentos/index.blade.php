<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos - Branet Tecnologia</title>
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
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--branet-dark);
            background-color: #ffffff;
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
        
        .filter-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .filter-title {
            color: var(--branet-primary);
            font-weight: 600;
            margin-bottom: 1.2rem;
            font-size: 1.2rem;
        }
        
        .form-control-branet, .form-select-branet {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.6rem 0.9rem;
            font-size: 0.95rem;
            transition: all 0.3s;
        }
        
        .form-control-branet:focus, .form-select-branet:focus {
            border-color: var(--branet-secondary);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }
        
        .btn-branet-primary {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(30, 58, 138, 0.2);
            color: white;
        }
        
        .btn-branet-outline {
            border: 1px solid var(--branet-primary);
            color: var(--branet-primary);
            background: white;
            border-radius: 8px;
            padding: 0.6rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-outline:hover {
            background: var(--branet-primary);
            color: white;
        }
        
        .document-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            margin-bottom: 1.5rem;
            border-left: 4px solid var(--branet-primary);
        }
        
        .document-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .document-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            color: var(--branet-primary);
            font-size: 1.5rem;
        }
        
        .document-title {
            font-weight: 600;
            color: var(--branet-dark);
            margin-bottom: 0.3rem;
            font-size: 1.1rem;
        }
        
        .document-meta {
            color: #6b7280;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            flex-wrap: wrap;
        }
        
        .badge-categoria {
            background: linear-gradient(135deg, var(--branet-accent), #fbbf24);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6b7280;
        }
        
        .empty-state-icon {
            font-size: 4rem;
            color: #d1d5db;
            margin-bottom: 1rem;
        }
        
        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2rem 0;
            margin-top: 8rem;
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
            
            .filter-card {
                padding: 1rem;
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
                        <a class="nav-link nav-link-branet" href="/categorias">CATEGORIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet active" href="/documentos">DOCUMENTOS</a>
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
            <h1 class="page-title">Gerenciamento de Documentos</h1>
            <p class="mb-0 opacity-90">Visualize, filtre e gerencie todos os documentos do sistema</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Filtros -->
        <div class="filter-card">
            <h3 class="filter-title"><i class="bi bi-funnel me-2"></i>Filtrar Documentos</h3>
            
            <form method="GET" action="{{ url('/documentos') }}" class="row g-3">
                <!-- Busca por Título -->
                <div class="col-md-4">
                    <label class="form-label fw-medium">Buscar por título</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" 
                               name="busca" 
                               class="form-control form-control-branet border-start-0" 
                               placeholder="Digite o título..."
                               value="{{ request('busca') }}">
                    </div>
                </div>
                
                <!-- Filtro por Categoria -->
                <div class="col-md-3">
                    <label class="form-label fw-medium">Categoria</label>
                    <select name="categoria_id" class="form-select form-select-branet">
                        <option value="">Todas as categorias</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" 
                                {{ request('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <!-- Período - Data Início -->
                <div class="col-md-2">
                    <label class="form-label fw-medium">Data início</label>
                    <input type="date" 
                           name="data_inicio" 
                           class="form-control form-control-branet"
                           value="{{ request('data_inicio') }}">
                </div>
                
                <!-- Período - Data Fim -->
                <div class="col-md-2">
                    <label class="form-label fw-medium">Data fim</label>
                    <input type="date" 
                           name="data_fim" 
                           class="form-control form-control-branet"
                           value="{{ request('data_fim') }}">
                </div>
                
                <!-- Botões -->
                <div class="col-md-1 d-flex align-items-end">
                    <button type="submit" class="btn btn-branet-primary w-100">
                        <i class="bi bi-funnel"></i>
                    </button>
                </div>
            </form>
            
            <!-- Botão Limpar Filtros -->
            @if(request()->hasAny(['busca', 'categoria_id', 'data_inicio', 'data_fim']))
            <div class="mt-3">
                <a href="{{ url('/documentos') }}" class="btn btn-branet-outline btn-sm">
                    <i class="bi bi-x-circle me-1"></i> Limpar filtros
                </a>
            </div>
            @endif
        </div>

        <!-- Resultados -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-semibold text-dark mb-0">
                Documentos encontrados: <span class="text-primary">{{ $documentos->count() }}</span>
            </h4>
            <a href="/documentos/create" class="btn btn-branet-primary">
                <i class="bi bi-plus-circle me-2"></i> Novo Documento
            </a>
        </div>

        <!-- Lista de Documentos -->
        @if($documentos->count() > 0)
            <div class="row">
                @foreach($documentos as $documento)
                <div class="col-12">
                    <div class="document-card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <div class="document-icon">
                                        @if(in_array(pathinfo($documento->versoes->first()->caminho_arquivo, PATHINFO_EXTENSION), ['pdf']))
                                            <i class="bi bi-file-earmark-pdf"></i>
                                        @elseif(in_array(pathinfo($documento->versoes->first()->caminho_arquivo, PATHINFO_EXTENSION), ['docx', 'doc']))
                                            <i class="bi bi-file-earmark-word"></i>
                                        @elseif(in_array(pathinfo($documento->versoes->first()->caminho_arquivo, PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg']))
                                            <i class="bi bi-file-earmark-image"></i>
                                        @else
                                            <i class="bi bi-file-earmark"></i>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <h5 class="document-title">
                                        <a href="{{ url('/documentos/' . $documento->id) }}" class="text-decoration-none text-dark">
                                            {{ $documento->titulo }}
                                        </a>
                                    </h5>
                                    
                                    <div class="document-meta">
                                        <span>
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ \Carbon\Carbon::parse($documento->data_documento)->format('d/m/Y') }}
                                        </span>
                                        
                                        <span>
                                            <i class="bi bi-folder me-1"></i>
                                            <span class="badge-categoria">{{ $documento->categoria->nome }}</span>
                                        </span>
                                        
                                        <span>
                                            <i class="bi bi-clock-history me-1"></i>
                                            {{ $documento->versoes->count() }} versões
                                        </span>
                                        
                                        <span>
                                            <i class="bi bi-geo-alt me-1"></i>
                                            {{ $documento->localizacao_fisica ?? 'Não informado' }}
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="col-auto">
                                    <a href="{{ url('/documentos/' . $documento->id) }}" class="btn btn-sm btn-branet-outline">
                                        <i class="bi bi-eye me-1"></i> Detalhes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- Estado vazio -->
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="bi bi-files"></i>
                </div>
                <h4 class="fw-semibold mb-3">Nenhum documento encontrado</h4>
                <p class="text-muted mb-4">
                    @if(request()->hasAny(['busca', 'categoria_id', 'data_inicio', 'data_fim']))
                        Não encontramos documentos com os filtros aplicados. Tente ajustar sua busca.
                    @else
                        Você ainda não possui documentos cadastrados.
                    @endif
                </p>
                <a href="/documentos/create" class="btn btn-branet-primary">
                    <i class="bi bi-plus-circle me-2"></i> Cadastrar primeiro documento
                </a>
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
                    <small class="opacity-75">&copy; 2026 Branet Tecnologia. Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>