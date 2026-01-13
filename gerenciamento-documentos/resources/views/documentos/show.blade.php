<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Detalhes do Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Documento: {{ $documento->titulo }}</h2>
            <a href="/documentos" class="btn btn-secondary">Voltar</a>
        </div>

        <div class="row">
            <div class="col-md-7 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white">Visualização Atual</div>
                    <div class="card-body p-0 d-flex align-items-center justify-content-center bg-white" style="min-height: 400px;">
                        @php 
                            $ultimaVersao = $documento->versoes->sortByDesc('numero_versao')->first(); 
                            $extensao = strtolower(pathinfo($ultimaVersao->caminho_arquivo, PATHINFO_EXTENSION));
                        @endphp

                        @if(in_array($extensao, ['jpg', 'jpeg', 'png']))
                            <img src="{{ asset('storage/' . $ultimaVersao->caminho_arquivo) }}" class="img-fluid p-2" style="max-height: 580px;">
                        @elseif($extensao == 'pdf')
                            <iframe src="{{ asset('storage/' . $ultimaVersao->caminho_arquivo) }}" width="100%" height="600px" style="border:none;"></iframe>
                        @else
                            <div class="text-center p-5">
                                <div class="alert alert-info">
                                    <p>O arquivo <strong>.{{ $extensao }}</strong> não permite visualização direta.</p>
                                    <a href="{{ asset('storage/' . $ultimaVersao->caminho_arquivo) }}" class="btn btn-primary" download>
                                        Baixar para Visualizar
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-dark text-white">Histórico de Versões</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th>Versão</th>
                                        <th>Data</th>
                                        <th class="text-end">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($documento->versoes->sortByDesc('numero_versao') as $versao)
                                        <tr>
                                            <td class="align-middle"><strong>v{{ $versao->numero_versao }}</strong></td>
                                            <td class="align-middle text-muted" style="font-size: 0.85rem;">
                                                {{ $versao->created_at->format('d/m/Y H:i') }}
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ asset('storage/' . $versao->caminho_arquivo) }}" target="_blank"
                                                    class="btn btn-sm btn-outline-primary" title="Ver no navegador">Ver</a>

                                                <a href="{{ asset('storage/' . $versao->caminho_arquivo) }}" 
                                                   download="documento_v{{ $versao->numero_versao }}" 
                                                   class="btn btn-sm btn-success" title="Baixar arquivo">
                                                   Baixar
                                                </a>
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

        <div class="row">
            <div class="col-12 mb-5">
                <div class="card shadow-sm border-warning">
                    <div class="card-header bg-warning text-dark">
                        <strong>Atualizar Dados ou Criar Nova Versão</strong>
                    </div>
                    <div class="card-body">
                        <form action="/documentos/{{ $documento->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Título do Documento</label>
                                    <input type="text" name="titulo" value="{{ $documento->titulo }}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Substituir Arquivo (Gera Nova Versão)</label>
                                    <input type="file" name="arquivo" class="form-control">
                                    <small class="text-muted">Formatos aceitos: PDF, DOCX, PNG, JPG</small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning w-100">Salvar Alterações</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>