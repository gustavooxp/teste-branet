<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Documentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Gerenciamento de Documentos</h2>

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-primary text-white">Novo Documento</div>
            <div class="card-body">
                <form action="/documentos" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nome do Documento</label>
                            <input type="text" name="titulo" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Categoria</label>
                            <select name="categoria_id" class="form-select" required>
                                <option value="">Selecione...</option>
                                @foreach($categorias as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Data do Documento</label>
                            <input type="date" name="data_documento" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Localização Física</label>
                            <input type="text" name="localizacao_fisica" class="form-control" placeholder="Ex: Armário 01" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Arquivo (PDF, DOCX, PNG, JPG)</label>
                            <input type="file" name="arquivo" class="form-control" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar Documento</button>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">Relatório de Documentos</div>
            <div class="card-body">
                <form action="/documentos" method="GET" class="row g-2 mb-4">
                    <div class="col-md-4">
                        <input type="date" name="data_inicio" class="form-control" placeholder="Data Início">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="data_fim" class="form-control" placeholder="Data Fim">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-secondary w-100">Filtrar Período</button>
                    </div>
                </form>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Data</th>
                            <th>Localização</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documentos as $doc)
                        <tr>
                            <td>{{ $doc->titulo }}</td>
                            <td>{{ $doc->categoria->nome }}</td>
                            <td>{{ date('d/m/Y', strtotime($doc->data_documento)) }}</td>
                            <td>{{ $doc->localizacao_fisica }}</td>
                            <td>
                                <a href="/documentos/{{ $doc->id }}" class="btn btn-sm btn-info">Ver Detalhes</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>