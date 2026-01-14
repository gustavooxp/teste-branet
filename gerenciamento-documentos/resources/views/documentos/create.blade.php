<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Documento - Branet Tecnologia</title>
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
        
        .form-select-branet {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-select-branet:focus {
            border-color: var(--branet-secondary);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }
        
        .form-label-branet {
            font-weight: 600;
            color: var(--branet-dark);
            margin-bottom: 0.5rem;
        }
        
        .file-upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 12px;
            padding: 3rem 2rem;
            text-align: center;
            background-color: #f8fafc;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .file-upload-area:hover {
            border-color: var(--branet-secondary);
            background-color: #f0f9ff;
        }
        
        .file-upload-area.drag-over {
            border-color: var(--branet-primary);
            background-color: #e0f2fe;
        }
        
        .file-icon {
            font-size: 3rem;
            color: var(--branet-primary);
            margin-bottom: 1rem;
        }
        
        .file-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            margin-top: 1rem;
        }
        
        .file-icon-sm {
            font-size: 1.5rem;
            color: var(--branet-primary);
        }
        
        .file-details {
            flex: 1;
        }
        
        .file-name {
            font-weight: 600;
            color: var(--branet-dark);
            margin-bottom: 0.25rem;
        }
        
        .file-size {
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .file-remove {
            color: #ef4444;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 1.2rem;
        }
        
        .required-field::after {
            content: ' *';
            color: #ef4444;
        }
        
        .form-help {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
            border-left: 4px solid var(--branet-primary);
        }
        
        .form-help-title {
            font-weight: 600;
            color: var(--branet-primary);
            margin-bottom: 0.5rem;
        }
        
        .footer-branet {
            background-color: var(--branet-dark);
            color: white;
            padding: 2rem 0;
            margin-top: 0;
            width: 100%;
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 2rem 0;
            }
            
            .page-title {
                font-size: 1.6rem;
            }
            
            .file-upload-area {
                padding: 2rem 1rem;
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
                        <a class="nav-link nav-link-branet" href="/documentos">DOCUMENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-branet active" href="/documentos/create">NOVO UPLOAD</a>
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
                    <h1 class="page-title">Cadastro de Novo Documento</h1>
                    <p class="mb-0 opacity-90">Preencha as informações para adicionar um novo documento ao sistema</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="/documentos" class="btn btn-branet-outline">
                        <i class="bi bi-arrow-left me-2"></i>Voltar para Lista
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
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
            
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" style="border-left: 4px solid #ef4444;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
                        <div>
                            <strong>Atenção!</strong> Por favor, corrija os erros abaixo.
                            <ul class="mb-0 mt-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Formulário de Cadastro -->
            <div class="card-branet">
                <div class="card-header-branet">
                    <i class="bi bi-file-earmark-plus me-2"></i>Formulário de Cadastro
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data" id="documentForm">
                        @csrf
                        
                        <div class="row">
                            <!-- Título do Documento -->
                            <div class="col-md-8 mb-4">
                                <label class="form-label-branet required-field">Título do Documento</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-card-heading text-muted"></i>
                                    </span>
                                    <input type="text" 
                                           name="titulo" 
                                           class="form-control form-control-branet border-start-0" 
                                           placeholder="Ex: Contrato de Prestação de Serviços, Relatório Anual 2024"
                                           value="{{ old('titulo') }}"
                                           required
                                           maxlength="255">
                                </div>
                                <small class="text-muted mt-1 d-block">Use um título descritivo e claro para identificação</small>
                            </div>
                            
                            <!-- Categoria -->
                            <div class="col-md-4 mb-4">
                                <label class="form-label-branet required-field">Categoria</label>
                                <select name="categoria_id" class="form-select form-select-branet" required>
                                    <option value="">Selecione uma categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>
                                            {{ $categoria->nome }}
                                        </option>
                                    @endforeach
                                </select>
                                <small class="text-muted mt-1 d-block">Classifique o documento por departamento/tipo</small>
                            </div>
                        </div>
                        
                        <div class="row">
                            <!-- Data do Documento -->
                            <div class="col-md-4 mb-4">
                                <label class="form-label-branet">Data do Documento</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-calendar text-muted"></i>
                                    </span>
                                    <input type="date" 
                                           name="data_documento" 
                                           class="form-control form-control-branet border-start-0"
                                           value="{{ old('data_documento', date('Y-m-d')) }}">
                                </div>
                                <small class="text-muted mt-1 d-block">Data de emissão/validade do documento</small>
                            </div>
                            
                            <!-- Localização Física -->
                            <div class="col-md-8 mb-4">
                                <label class="form-label-branet">Localização Física</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="bi bi-geo-alt text-muted"></i>
                                    </span>
                                    <input type="text" 
                                           name="localizacao_fisica" 
                                           class="form-control form-control-branet border-start-0" 
                                           placeholder="Ex: Arquivo A, Estante 3, Prateleira B, Pasta 15"
                                           value="{{ old('localizacao_fisica') }}"
                                           maxlength="255">
                                </div>
                                <small class="text-muted mt-1 d-block">Local físico onde o documento original está armazenado</small>
                            </div>
                        </div>
                        
                        <!-- Upload de Arquivo -->
                        <div class="mb-4">
                            <label class="form-label-branet required-field">Arquivo do Documento</label>
                            
                            <div class="file-upload-area" id="dropArea">
                                <div class="file-icon">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">Arraste e solte seu arquivo aqui</h5>
                                <p class="text-muted mb-3">ou clique para selecionar</p>
                                
                                <input type="file" 
                                       name="arquivo" 
                                       id="fileInput" 
                                       class="d-none" 
                                       accept=".pdf,.docx,.doc,.png,.jpg,.jpeg"
                                       required>
                                
                                <button type="button" class="btn btn-branet-outline" onclick="document.getElementById('fileInput').click()">
                                    <i class="bi bi-folder2-open me-2"></i>Selecionar Arquivo
                                </button>
                                
                                <div class="mt-3">
                                    <small class="text-muted">
                                        Formatos aceitos: PDF, DOCX, DOC, PNG, JPG, JPEG (Máx. 10MB)
                                    </small>
                                </div>
                            </div>
                            
                            <!-- Preview do arquivo selecionado -->
                            <div id="filePreview" class="d-none">
                                <div class="file-info">
                                    <div class="file-icon-sm">
                                        <i class="bi bi-file-earmark-text" id="fileIcon"></i>
                                    </div>
                                    <div class="file-details">
                                        <div class="file-name" id="fileName"></div>
                                        <div class="file-size" id="fileSize"></div>
                                    </div>
                                    <button type="button" class="file-remove" onclick="removeFile()">
                                        <i class="bi bi-x-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Ajuda/Informações -->
                        <div class="form-help">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-info-circle fs-4 text-primary me-3"></i>
                                <div>
                                    <h6 class="form-help-title">Importante</h6>
                                    <ul class="mb-0 text-muted">
                                        <li>O sistema criará automaticamente a versão 1.0 do documento</li>
                                        <li>Certifique-se de que o arquivo está legível e não corrompido</li>
                                        <li>Para documentos confidenciais, utilize categorias específicas</li>
                                        <li>Após o upload, você poderá gerenciar versões na página de detalhes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Botões de Ação -->
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <div>
                                <span class="text-muted">
                                    <i class="bi bi-shield-check me-1 text-success"></i>
                                    Todos os dados são armazenados com segurança
                                </span>
                            </div>
                            <div class="d-flex gap-3">
                                <a href="/documentos" class="btn btn-branet-outline">
                                    <i class="bi bi-x-circle me-2"></i>Cancelar
                                </a>
                                <button type="submit" class="btn btn-branet-primary">
                                    <i class="bi bi-save me-2"></i>Salvar Documento
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Informações sobre Categorias -->
            @if($categorias->count() == 0)
                <div class="alert alert-warning mt-4" style="border-left: 4px solid var(--branet-accent);">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle fs-4 text-warning me-3"></i>
                        <div>
                            <h6 class="fw-semibold mb-1">Nenhuma categoria cadastrada</h6>
                            <p class="mb-0">
                                Você precisa criar categorias antes de cadastrar documentos. 
                                <a href="/categorias" class="fw-semibold">Clique aqui para criar categorias</a>.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
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
    <script>
        // Elementos DOM
        const fileInput = document.getElementById('fileInput');
        const dropArea = document.getElementById('dropArea');
        const filePreview = document.getElementById('filePreview');
        const fileName = document.getElementById('fileName');
        const fileSize = document.getElementById('fileSize');
        const fileIcon = document.getElementById('fileIcon');
        
        // Extensões e ícones
        const fileIcons = {
            'pdf': 'bi-file-earmark-pdf',
            'docx': 'bi-file-earmark-word',
            'doc': 'bi-file-earmark-word',
            'png': 'bi-file-earmark-image',
            'jpg': 'bi-file-earmark-image',
            'jpeg': 'bi-file-earmark-image'
        };
        
        // Função para formatar tamanho do arquivo
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }
        
        // Função para obter ícone baseado na extensão
        function getFileIcon(filename) {
            const extension = filename.split('.').pop().toLowerCase();
            return fileIcons[extension] || 'bi-file-earmark-text';
        }
        
        // Função para exibir preview do arquivo
        function showFilePreview(file) {
            fileName.textContent = file.name;
            fileSize.textContent = formatFileSize(file.size);
            fileIcon.className = `bi ${getFileIcon(file.name)}`;
            filePreview.classList.remove('d-none');
            dropArea.classList.add('d-none');
        }
        
        // Função para remover arquivo selecionado
        function removeFile() {
            fileInput.value = '';
            filePreview.classList.add('d-none');
            dropArea.classList.remove('d-none');
        }
        
        // Evento quando arquivo é selecionado
        fileInput.addEventListener('change', function(e) {
            if (this.files.length > 0) {
                showFilePreview(this.files[0]);
            }
        });
        
        // Drag and drop
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight() {
            dropArea.classList.add('drag-over');
        }
        
        function unhighlight() {
            dropArea.classList.remove('drag-over');
        }
        
        // Drop
        dropArea.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            if (files.length > 0) {
                fileInput.files = files;
                showFilePreview(files[0]);
            }
        }
        
        // Validação de tamanho máximo (10MB)
        document.getElementById('documentForm').addEventListener('submit', function(e) {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const maxSize = 10 * 1024 * 1024; // 10MB
                
                if (file.size > maxSize) {
                    e.preventDefault();
                    alert('O arquivo é muito grande. O tamanho máximo permitido é 10MB.');
                    removeFile();
                }
            }
        });
        
        // Se houver erro de validação no campo arquivo, mostrar mensagem
        @if($errors->has('arquivo'))
            document.addEventListener('DOMContentLoaded', function() {
                alert('Erro no arquivo: {{ $errors->first("arquivo") }}');
            });
        @endif
    </script>
</body>
</html>