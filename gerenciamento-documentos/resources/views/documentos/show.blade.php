<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>Documento: {{ $documento->titulo }}</h2>
            <a href="/documentos" class="btn btn-secondary">Voltar</a>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Visualização</div>
                    <div class="card-body p-0">
                        @php $ultimaVersao = $documento->versoes->last(); @endphp
                        
                        @if(Str::endsWith($ultimaVersao->caminho_arquivo, ['.jpg', '.png']))
                            <img src="{{ asset('storage/' . $ultimaVersao->caminho_arquivo) }}" class="img-fluid">
                        @else
                            <iframe src="{{ asset('storage/' . $ultimaVersao->caminho_arquivo) }}" width="100%" height="600px"></iframe>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">Histórico de Versões</div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Versão</th>
                                    <th>Data</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($documento->versoes->sortByDesc('numero_versao') as $versao)
                                <tr>
                                    <td>v{{ $versao->numero_versao }}</td>
                                    <td>{{ $versao->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $versao->caminho_arquivo) }}" target="_blank" class="btn btn-sm btn-outline-primary">Abrir</a>
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
</body>
</html>