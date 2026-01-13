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

    public function update(Request $request, $id)
    {
        $documento = Documento::findOrFail($id);

        // Se o usuário enviou um arquivo novo, criamos uma nova versão
        if ($request->hasFile('arquivo')) {
            // 1. Sobe o arquivo novo
            $caminho = $request->file('arquivo')->store('documentos', 'public');

            // 2. Descobre qual o número da última versão e soma +1
            $ultimaVersao = $documento->versoes->max('numero_versao') ?? 1;

            // 3. Salva no histórico de versões
            $documento->versoes()->create([
                'caminho_arquivo' => $caminho,
                'numero_versao' => $ultimaVersao + 1,
            ]);
        }

        // Atualiza os outros dados (Título, Localização, etc)
        $documento->update($request->only(['titulo', 'categoria_id', 'localizacao_fisica', 'data_documento']));

        return redirect()->back()->with('success', 'Documento e versão atualizados!');
    }

    public function show($id)
    {
        // Busca o documento pelo ID ou retorna erro 404 se não existir
        // O 'with' traz junto as versões e a categoria para ganhar performance
        $documento = Documento::with(['versoes', 'categoria'])->findOrFail($id);

        return view('documentos.show', compact('documento'));
    }

}