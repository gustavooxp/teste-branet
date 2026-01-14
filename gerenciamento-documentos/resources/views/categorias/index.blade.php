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
            text-decoration: none;
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
        
        .form-control-branet {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.3s;
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

        .btn-branet-danger {
            background: linear-gradient(135deg, var(--branet-danger), #dc2626);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-branet-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(239, 68, 68, 0.2);
            color: white;
        }
        
        .form-alinhado {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }
        
        .form-alinhado .campo-texto { flex: 1; }
        
        .form-alinhado .btn-salvar {
            margin-top: 2rem;
            height: 50px;
        }
        
        .table-branet {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }
        
        .table-branet thead {
            background: linear-gradient(135deg, var(--branet-primary), #2563eb);
            color: white;
        }
        
        .category-badge {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            color: var(--branet-primary);
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .category-id {
            color: var(--branet-primary);
            font-weight: 600;
            background: #f1f5f9;
            padding: 0.3rem 0.8rem;
            border-radius: 6px;
        }

        .btn-action {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s;
            border: 1px solid #e5e7eb;
            background: white;
        }

        .btn-action:hover { transform: scale(1.1); }

        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Modal de confirmação de exclusão */
        .modal-delete .modal-content {
            border-radius: 16px;
            border: none;
            overflow: hidden;
        }

        .modal-delete .modal-header {
            background: linear-gradient(135deg, #fee, #fdd);
            border-bottom: none;
            padding: 2rem 2rem 0.5rem 2rem;
        }

        .modal-delete .modal-body {
            padding: 1.5rem 2rem;
        }

        .modal-delete .modal-footer {
            border-top: none;
            padding: 0 2rem 2rem 2rem;
        }

        .delete-icon-container {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #fee, #fdd);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.15);
        }

        .delete-icon {
            color: var(--branet-danger);
            font-size: 2.5rem;
        }

        .category-name-highlight {
            background: #fef2f2;
            color: var(--branet-danger);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            border-left: 4px solid var(--branet-danger);
            margin: 1rem 0;
        }

        @media (max-width: 768px) {
            .form-alinhado { flex-direction: column; }
            .form-alinhado .btn-salvar { margin-top: 0; width: 100%; }
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
                    <li class="nav-item"><a class="nav-link nav-link-branet" href="/">INÍCIO</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-branet active" href="/categorias">CATEGORIAS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-branet" href="/documentos">DOCUMENTOS</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-branet" href="/documentos/create">NOVO UPLOAD</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h1 class="page-title">Gerenciamento de Categorias</h1>
            <p class="mb-0 opacity-90">Organize seus documentos por departamentos e tipos</p>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm d-flex align-items-center mb-4" style="border-radius: 12px; border-left: 5px solid var(--branet-success) !important;">
                <i class="bi bi-check-circle-fill me-3 fs-4"></i>
                <div>{{ session('success') }}</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger border-0 shadow-sm d-flex align-items-center mb-4" style="border-radius: 12px; border-left: 5px solid var(--branet-danger) !important;">
                <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
                <div>{{ session('error') }}</div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card-branet mb-5">
            <div class="card-body p-4">
                <h3 class="fw-semibold text-dark mb-4">
                    <i class="bi bi-plus-circle text-primary me-2"></i>Nova Categoria
                </h3>
                
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                    <div class="form-alinhado">
                        <div class="campo-texto">
                            <label class="form-label fw-medium text-muted">NOME DA CATEGORIA</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-tag text-muted"></i>
                                </span>
                                <input type="text" name="nome" class="form-control form-control-branet border-start-0" 
                                       placeholder="Ex: Recursos Humanos, Financeiro..." required>
                            </div>
                        </div>
                        <div class="btn-salvar">
                            <button class="btn btn-branet-primary h-100" type="submit">
                                <i class="bi bi-check-circle me-2"></i>Salvar Categoria
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-semibold text-dark mb-0">Categorias Cadastradas</h3>
            <span class="badge bg-primary rounded-pill px-3">{{ $categorias->count() }} Total</span>
        </div>

        @if($categorias->count() > 0)
            <div class="table-responsive shadow-sm" style="border-radius: 12px;">
                <table class="table table-branet mb-0">
                    <thead>
                        <tr>
                            <th width="100">ID</th>
                            <th>NOME DA CATEGORIA</th>
                            <th width="150">STATUS</th>
                            <th width="180" class="text-center">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categorias as $cat)
                            <tr>
                                <td><span class="category-id">#{{ str_pad($cat->id, 3, '0', STR_PAD_LEFT) }}</span></td>
                                <td>
                                    <strong class="text-dark d-block">{{ $cat->nome }}</strong>
                                    <small class="text-muted">Criada em {{ $cat->created_at->format('d/m/Y') }}</small>
                                </td>
                                <td><span class="category-badge"><i class="bi bi-check-lg"></i> Ativa</span></td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn-action text-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $cat->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn-action text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $cat->id }}">
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal de Edição -->
                            <div class="modal fade" id="editModal{{ $cat->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
                                        <div class="modal-header border-0 pb-0 pt-4 px-4">
                                            <h5 class="fw-bold">Editar Categoria</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="{{ route('categorias.update', $cat->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body p-4">
                                                <label class="form-label small fw-bold text-muted">NOVO NOME</label>
                                                <input type="text" name="nome" value="{{ $cat->nome }}" class="form-control form-control-branet" required>
                                            </div>
                                            <div class="modal-footer border-0 p-4 pt-0">
                                                <button type="button" class="btn btn-light rounded-3" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-branet-primary">Atualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal de Confirmação de Exclusão -->
                            <div class="modal fade modal-delete" id="deleteModal{{ $cat->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold text-danger">Confirmar Exclusão</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <div class="delete-icon-container">
                                                <i class="bi bi-exclamation-triangle delete-icon"></i>
                                            </div>
                                            <h5 class="fw-bold mb-3">Tem certeza que deseja excluir?</h5>
                                            <p class="text-muted">Esta ação não pode ser desfeita. A categoria será removida permanentemente.</p>
                                            
                                            <div class="category-name-highlight">
                                                <i class="bi bi-tag me-2"></i>{{ $cat->nome }}
                                            </div>
                                            
                                            <div class="alert alert-warning border-0 mt-3" style="background: #fffbeb;">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-info-circle-fill me-2"></i>
                                                    <small class="fw-medium">Verifique se não há documentos vinculados a esta categoria antes de excluir.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <button type="button" class="btn btn-light rounded-3 px-4" data-bs-dismiss="modal">
                                                <i class="bi bi-x-circle me-2"></i>Cancelar
                                            </button>
                                            <form action="{{ route('categorias.destroy', $cat->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-branet-danger rounded-3 px-4">
                                                    <i class="bi bi-trash3 me-2"></i>Sim, Excluir
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="card-branet p-5 text-center text-muted">
                <i class="bi bi-tags fs-1 d-block mb-3 opacity-25"></i>
                <p>Nenhuma categoria encontrada.</p>
            </div>
        @endif
    </div>

    <footer class="footer-branet">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <div class="navbar-brand-branet" style="font-size: 1.5rem;">Branet Tecnologia</div>
                    <p class="mb-0 opacity-75 small">Tecnologia para governança com sucesso</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <small class="opacity-50">&copy; 2026 Branet Tecnologia. Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animação suave ao abrir modais de exclusão
        document.querySelectorAll('.btn-action.text-danger').forEach(button => {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-bs-target');
                const modal = document.querySelector(modalId);
                modal.classList.add('fade');
            });
        });
    </script>
</body>
</html>