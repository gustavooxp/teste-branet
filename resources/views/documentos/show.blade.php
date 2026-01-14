<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Documento - Branet Tecnologia</title>
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
            --branet-warning: #f59e0b;
            --branet-danger: #ef4444;
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
        
        .page-header {
            background: linear-gradient(135deg, var(--branet-primary) 0%, #2563eb 100%);
            color: white;
            padding: 2.5rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
        }
        
        .page-title {
            font-weight: 700;
            font-size: 2rem;
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
        
        .card-header-branet {
            background: linear-gradient(135deg, var(--branet-primary), #2563eb);
            color: white;
            border: none;
            border-radius: 12px 12px 0 0 !important;
            padding: 1.2rem 1.5rem;
            font-weight: 600;
        }
        
        .card-header-warning {
            background: linear-gradient(135deg, var(--branet-warning), #fbbf24);
            color: white;
            border: none;
            border-radius: 12px 12px 0 0 !important;
            padding: 1.2rem 1.5rem;
            font-weight: 600;
        }
        
        .card-header-dark {
            background: linear-gradient(135deg, var(--branet-dark), #374151);
            color: white;
            border: none;
            border-radius: 12px 12px 0 0 !important;
            padding: 1.2rem 1.5rem;
            font-weight: 600;
        }
        
        .btn-branet-primary {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
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
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-outline:hover {
            background: var(--branet-primary);
            color: white;
        }
        
        .btn-branet-success {
            background: linear-gradient(135deg, var(--branet-success), #34d399);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(16, 185, 129, 0.2);
            color: white;
        }
        
        .btn-branet-warning {
            background: linear-gradient(135deg, var(--branet-warning), #fbbf24);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(245, 158, 11, 0.2);
            color: white;
        }
        
        /* Botão de deletar (lixeira) */
        .btn-delete {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(239, 68, 68, 0.2);
            color: white;
        }
        
        .table-branet {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            border: 1px solid #e5e7eb;
        }
        
        .table-branet thead {
            background: #f8fafc;
            color: var(--branet-dark);
        }
        
        .table-branet thead th {
            border: none;
            padding: 1rem 1.5rem;
            font-weight: 600;
            color: var(--branet-primary);
        }
        
        .table-branet tbody tr {
            transition: all 0.2s;
            border-bottom: 1px solid #f1f5f9;
        }
        
        .table-branet tbody tr:hover {
            background-color: #f8fafc;
        }
        
        .table-branet tbody td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
        }
        
        .badge-versao {
            background: linear-gradient(135deg, var(--branet-primary), var(--branet-secondary));
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .visualizador-documento {
            background: #f8fafc;
            border-radius: 8px;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .documento-info {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.8rem;
            color: var(--branet-dark);
        }
        
        .info-label {
            font-weight: 600;
            min-width: 120px;
            color: var(--branet-primary);
        }
        
        .info-value {
            color: var(--branet-dark);
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
        
        .form-label-branet {
            font-weight: 600;
            color: var(--branet-dark);
            margin-bottom: 0.5rem;
        }
        
        /* Modal personalizado */
        .modal-confirm-delete .modal-header {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
        }
        
        .modal-confirm-delete .modal-header .btn-close {
            filter: invert(1);
        }
        
        .confirmation-icon {
            font-size: 4rem;
            color: #ef4444;
            margin-bottom: 1rem;
        }
        
        .confirmation-step {
            transition: all 0.3s ease;
        }
        
        .confirmation-step.active {
            display: block;
        }
        
        .confirmation-step:not(.active) {
            display: none;
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
                font-size: 1.6rem;
            }
            
            .visualizador-documento {
                min-height: 300px;
            }
            
            .confirmation-icon {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>

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
                        <a class="nav-link nav-link-branet" href="/documentos">DOCUMENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet" href="/documentos/create">NOVO UPLOAD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div>
                    <h1 class="page-title">{{ $documento->titulo }}</h1>
                    <p class="mb-0 opacity-90">Detalhes e histórico de versões do documento</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="/documentos" class="btn btn-branet-outline me-2">
                        <i class="bi bi-arrow-left me-2"></i>Voltar para Lista
                    </a>
                    <!-- Botão de lixeira para deletar -->
                    <button type="button" class="btn btn-delete" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                        <i class="bi bi-trash me-2"></i>Excluir Documento
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Mensagens de sucesso/erro -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert" style="border-left: 4px solid var(--branet-success);">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 fs-4 text-success"></i>
                    <div>
                        <strong>Sucesso!</strong> {{ session('success') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" style="border-left: 4px solid #ef4444;">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
                    <div>
                        <strong>Atenção!</strong> {{ session('error') }}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="documento-info mb-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-card-heading me-2"></i>Título:</span>
                        <span class="info-value">{{ $documento->titulo }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-folder me-2"></i>Categoria:</span>
                        <span class="info-value">{{ $documento->categoria->nome }}</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-calendar me-2"></i>Data do Documento:</span>
                        <span class="info-value">{{ \Carbon\Carbon::parse($documento->data_documento)->format('d/m/Y') }}</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label"><i class="bi bi-geo-alt me-2"></i>Localização Física:</span>
                        <span class="info-value">{{ $documento->localizacao_fisica ?? 'Não informada' }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mb-4">
                <div class="card-branet h-100">
                    <div class="card-header-branet">
                        <i class="bi bi-file-earmark-text me-2"></i>Visualização Atual
                        <span class="badge-versao float-end">
                            v{{ $documento->versoes->sortByDesc('numero_versao')->first()->numero_versao }}
                        </span>
                    </div>
                    <div class="card-body p-0">
                        <div class="visualizador-documento p-3">
                            @php 
                                $ultimaVersao = $documento->versoes->sortByDesc('numero_versao')->first(); 
                                $urlArquivo = Storage::url($ultimaVersao->caminho_arquivo);
                                $extensao = strtolower(pathinfo($ultimaVersao->caminho_arquivo, PATHINFO_EXTENSION));
                                $nomeArquivoLimpo = \Illuminate\Support\Str::slug($documento->titulo);
                            @endphp

                            @if(in_array($extensao, ['jpg', 'jpeg', 'png']))
                                <img src="{{ $urlArquivo }}" class="img-fluid rounded" style="max-height: 500px; max-width: 100%; object-fit: contain;">
                            @elseif($extensao == 'pdf')
                                <iframe src="{{ $urlArquivo }}#toolbar=0&navpanes=0" 
                                        width="100%" 
                                        height="500px" 
                                        style="border: none; border-radius: 8px;">
                                </iframe>
                            @else
                                <div class="text-center p-5">
                                    <div class="alert alert-light border" style="border-left: 4px solid var(--branet-primary);">
                                        <div class="mb-3">
                                            <i class="bi bi-file-earmark fs-1 text-primary"></i>
                                        </div>
                                        <h5 class="fw-semibold mb-2">Visualização Indisponível</h5>
                                        <p class="text-muted mb-3">
                                            O arquivo <strong>.{{ $extensao }}</strong> não permite visualização direta no navegador.
                                        </p>
                                        <a href="{{ $urlArquivo }}" 
                                           class="btn btn-branet-primary" 
                                           download="{{ $nomeArquivoLimpo }}_v{{ $ultimaVersao->numero_versao }}">
                                            <i class="bi bi-download me-2"></i>Baixar para Visualizar
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-4">
                <div class="card-branet h-100">
                    <div class="card-header-dark">
                        <i class="bi bi-clock-history me-2"></i>Histórico de Versões
                        <span class="float-end">{{ $documento->versoes->count() }} versões</span>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-branet mb-0">
                                <thead>
                                    <tr>
                                        <th width="80">Versão</th>
                                        <th>Data/Hora</th>
                                        <th width="150" class="text-end">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($documento->versoes->sortByDesc('numero_versao') as $versao)
                                        <tr>
                                            <td class="align-middle">
                                                <span class="badge-versao">v{{ $versao->numero_versao }}</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="text-muted" style="font-size: 0.85rem;">
                                                    {{ $versao->created_at->format('d/m/Y') }}
                                                </div>
                                                <div class="text-muted" style="font-size: 0.8rem;">
                                                    {{ $versao->created_at->format('H:i') }}
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <a href="{{ Storage::url($versao->caminho_arquivo) }}" 
                                                       target="_blank"
                                                       class="btn btn-branet-outline btn-sm">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    
                                                    <a href="{{ Storage::url($versao->caminho_arquivo) }}" 
                                                       download="{{ \Illuminate\Support\Str::slug($documento->titulo) }}_v{{ $versao->numero_versao }}" 
                                                       class="btn btn-branet-success btn-sm">
                                                        <i class="bi bi-download"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card-branet border-warning">
                    <div class="card-header-warning">
                        <i class="bi bi-arrow-repeat me-2"></i>Atualizar Dados ou Criar Nova Versão
                    </div>
                    <div class="card-body">
                        <form action="/documentos/{{ $documento->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-branet">Título do Documento</label>
                                    <input type="text" 
                                           name="titulo" 
                                           value="{{ $documento->titulo }}" 
                                           class="form-control form-control-branet" 
                                           required>
                                </div>
                                
                                <div class="col-md-6 mb-3">
                                    <label class="form-label-branet">Substituir Arquivo (Gera Nova Versão)</label>
                                    <div class="input-group">
                                        <input type="file" 
                                               name="arquivo" 
                                               class="form-control form-control-branet"
                                               id="arquivoInput">
                                        <label class="input-group-text bg-light border-start-0" for="arquivoInput">
                                            <i class="bi bi-upload text-muted"></i>
                                        </label>
                                    </div>
                                    <small class="text-muted mt-1 d-block">
                                        Formatos permitidos: PDF, DOCX, PNG, JPG (Máx. 2MB)
                                    </small>
                                </div>
                            </div>
                            
                            <div class="alert alert-light border mb-4" style="border-left: 4px solid var(--branet-warning);">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-info-circle fs-5 text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Atenção</h6>
                                        <p class="mb-0">Enviar um novo arquivo criará automaticamente uma nova versão do documento.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-branet-warning w-100 py-3">
                                <i class="bi bi-save me-2"></i>Salvar Alterações
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação Dupla -->
    <div class="modal fade modal-confirm-delete" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Excluir Documento
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <!-- Primeira Confirmação -->
                    <div id="firstConfirmation" class="confirmation-step active">
                        <div class="text-center">
                            <div class="confirmation-icon">
                                <i class="bi bi-question-circle-fill"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Excluir documento?</h4>
                            <p class="text-muted mb-4">
                                Você está prestes a excluir o documento:<br>
                                <strong class="text-dark">"{{ $documento->titulo }}"</strong>
                            </p>
                            <p class="text-danger mb-4">
                                <i class="bi bi-exclamation-triangle me-1"></i>
                                Esta ação não pode ser desfeita.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Segunda Confirmação -->
                    <div id="secondConfirmation" class="confirmation-step">
                        <div class="text-center">
                            <div class="confirmation-icon">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                            </div>
                            <h4 class="fw-bold mb-3 text-danger">Confirmação Final</h4>
                            <p class="text-danger mb-4">
                                <strong>ATENÇÃO!</strong><br>
                                Você está prestes a excluir permanentemente:
                            </p>
                            
                            <div class="alert alert-danger border mb-4">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-trash-fill me-2 mt-1"></i>
                                    <div>
                                        <strong>Documento:</strong> {{ $documento->titulo }}<br>
                                        <strong>Versões:</strong> {{ $documento->versoes->count() }} arquivo(s)<br>
                                        <strong>Localização:</strong> {{ $documento->categoria->nome }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-check mb-4 text-start">
                                <input class="form-check-input" type="checkbox" id="finalConfirmationCheckbox">
                                <label class="form-check-label text-danger fw-medium" for="finalConfirmationCheckbox">
                                    <i class="bi bi-shield-exclamation me-1"></i>
                                    Eu entendo que esta exclusão é <strong>PERMANENTE e IRREVERSÍVEL</strong>
                                </label>
                            </div>
                            
                            <p class="text-muted small">
                                <i class="bi bi-info-circle me-1"></i>
                                Todos os dados serão apagados definitivamente do sistema.
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    
                    <!-- Botões da Primeira Confirmação -->
                    <div id="firstConfirmationButtons" class="confirmation-step active">
                        <button type="button" class="btn btn-branet-outline" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-2"></i>Cancelar
                        </button>
                        <button type="button" class="btn btn-delete" onclick="showSecondConfirmation()">
                            <i class="bi bi-trash me-2"></i>Sim, excluir
                        </button>
                    </div>
                    
                    <!-- Botões da Segunda Confirmação -->
                    <div id="secondConfirmationButtons" class="confirmation-step">
                        <button type="button" class="btn btn-branet-outline" onclick="backToFirstConfirmation()">
                            <i class="bi bi-arrow-left me-2"></i>Voltar
                        </button>
                        
                        <!-- Formulário de exclusão real -->
                        <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST" id="deleteForm" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="btn btn-delete" 
                                    id="finalDeleteButton"
                                    disabled>
                                <i class="bi bi-trash-fill me-2"></i>Excluir Permanentemente
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-branet mt-5">
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
    <script>
        // Função para mostrar a segunda confirmação
        function showSecondConfirmation() {
            // Oculta a primeira confirmação
            document.getElementById('firstConfirmation').classList.remove('active');
            document.getElementById('firstConfirmationButtons').classList.remove('active');
            
            // Mostra a segunda confirmação
            document.getElementById('secondConfirmation').classList.add('active');
            document.getElementById('secondConfirmationButtons').classList.add('active');
            
            // Desabilita o botão final inicialmente
            document.getElementById('finalDeleteButton').disabled = true;
        }
        
        // Função para voltar para a primeira confirmação
        function backToFirstConfirmation() {
            // Oculta a segunda confirmação
            document.getElementById('secondConfirmation').classList.remove('active');
            document.getElementById('secondConfirmationButtons').classList.remove('active');
            
            // Mostra a primeira confirmação
            document.getElementById('firstConfirmation').classList.add('active');
            document.getElementById('firstConfirmationButtons').classList.add('active');
            
            // Reseta o checkbox
            document.getElementById('finalConfirmationCheckbox').checked = false;
        }
        
        // Quando o modal é fechado, reseta para a primeira confirmação
        document.getElementById('confirmDeleteModal').addEventListener('hidden.bs.modal', function () {
            backToFirstConfirmation();
        });
        
        // Controla o botão de exclusão final baseado no checkbox
        document.getElementById('finalConfirmationCheckbox').addEventListener('change', function() {
            document.getElementById('finalDeleteButton').disabled = !this.checked;
        });
        
        // Quando o modal é aberto, foca no primeiro botão
        document.getElementById('confirmDeleteModal').addEventListener('shown.bs.modal', function () {
            document.querySelector('#firstConfirmationButtons .btn-delete').focus();
        });
    </script>
</body>
</html>