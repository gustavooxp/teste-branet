<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Gerenciar Categorias</h2>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" name="nome" class="form-control" placeholder="Ex: RH, Financeiro" required>
                    <button class="btn btn-primary" type="submit">Salvar Categoria</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>