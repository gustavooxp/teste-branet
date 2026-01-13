<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;        
use App\Models\Categoria;      
use App\Models\VersaoDocumento;

class DocumentoController extends Controller
{
    public function index(Request $request)
{
    // Pegamos todas as categorias para preencher o "select" do formulário
    $categorias = Categoria::all();

    // Iniciamos a busca de documentos
    $query = Documento::query();

    // Lógica do Relatório: Se o usuário preencher as datas, filtramos (Requisito do Teste)
    if ($request->filled('data_inicio') && $request->filled('data_fim')) {
        $query->whereBetween('data_documento', [$request->data_inicio, $request->data_fim]);
    }

    // Pegamos os documentos com a categoria carregada para evitar erros
    $documentos = $query->with('categoria')->get();

    // Enviamos tudo para a View que você acabou de criar
    return view('documentos.index', compact('categorias', 'documentos'));
}

    // Esta função salva o documento e o arquivo
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'categoria_id' => 'required',
            'arquivo' => 'required|mimes:pdf,docx,png,jpg|max:2048',
        ]);

        // 1. Cria o registro do documento
        $documento = Documento::create([
            'titulo' => $request->titulo,
            'data_documento' => $request->data_documento,
            'localizacao_fisica' => $request->localizacao_fisica,
            'categoria_id' => $request->categoria_id,
        ]);

        // 2. Sobe o arquivo para a pasta storage/app/public/documentos
        $caminho = $request->file('arquivo')->store('documentos', 'public');

        // 3. Registra a primeira versão
        VersaoDocumento::create([
            'documento_id' => $documento->id,
            'caminho_arquivo' => $caminho,
            'numero_versao' => 1,
        ]);

        return redirect()->back()->with('success', 'Documento salvo com sucesso!');
    }
}