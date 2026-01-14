<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Categoria;
use App\Models\VersaoDocumento;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    public function index(Request $request)
    {
        $query = Documento::query();

        // Filtro por Título (Busca textual)
        if ($request->filled('busca')) {
            $query->where('titulo', 'like', '%' . $request->busca . '%');
        }

        // Filtro por Categoria
        if ($request->filled('categoria_id')) {
            $query->where('categoria_id', $request->categoria_id);
        }

        // Filtro por Período (Datas)
        if ($request->filled('data_inicio')) {
            $query->whereDate('data_documento', '>=', $request->data_inicio);
        }

        if ($request->filled('data_fim')) {
            $query->whereDate('data_documento', '<=', $request->data_fim);
        }

        // Carrega os documentos filtrados e as categorias para o select
        $documentos = $query->with('categoria')->orderBy('created_at', 'desc')->get();
        $categorias = Categoria::all();

        return view('documentos.index', compact('documentos', 'categorias'));
    }

    // Método para exibir o formulário de criação
    public function create()
    {
        // Carrega as categorias para o select do formulário
        $categorias = Categoria::all();
        
        return view('documentos.create', compact('categorias'));
    }

    // Esta função salva o documento e o arquivo
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'arquivo' => 'required|file|mimes:pdf,docx,doc,png,jpg,jpeg|max:10240', // max 10MB
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

        return redirect()->route('documentos.index')->with('success', 'Documento salvo com sucesso!');
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

    // Método para deletar documento
    public function destroy($id)
    {
        $documento = Documento::with('versoes')->findOrFail($id);
        
        // Deleta todas as versões do arquivo no storage
        foreach ($documento->versoes as $versao) {
            if (Storage::disk('public')->exists($versao->caminho_arquivo)) {
                Storage::disk('public')->delete($versao->caminho_arquivo);
            }
        }
        
        // Deleta as versões do banco de dados
        $documento->versoes()->delete();
        
        // Deleta o documento
        $documento->delete();
        
        return redirect()->route('documentos.index')->with('success', 'Documento excluído permanentemente!');
    }

}