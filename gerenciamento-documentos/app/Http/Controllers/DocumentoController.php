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

        if ($request->filled('busca')) {
            $query->where('titulo', 'like', '%' . $request->busca . '%');
        }

        if ($request->filled('categoria_id')) {
            $query->where('categoria_id', $request->categoria_id);
        }

        if ($request->filled('data_inicio')) {
            $query->whereDate('data_documento', '>=', $request->data_inicio);
        }

        if ($request->filled('data_fim')) {
            $query->whereDate('data_documento', '<=', $request->data_fim);
        }

        $documentos = $query->with('categoria')->orderBy('created_at', 'desc')->get();
        $categorias = Categoria::all();

        return view('documentos.index', compact('documentos', 'categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        
        return view('documentos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
            'arquivo' => 'required|file|mimes:pdf,docx,doc,png,jpg,jpeg|max:10240', // max 10MB
        ]);

        $documento = Documento::create([
            'titulo' => $request->titulo,
            'data_documento' => $request->data_documento,
            'localizacao_fisica' => $request->localizacao_fisica,
            'categoria_id' => $request->categoria_id,
        ]);

        $caminho = $request->file('arquivo')->store('documentos', 'public');

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

        if ($request->hasFile('arquivo')) {
            // 1. Sobe o arquivo novo
            $caminho = $request->file('arquivo')->store('documentos', 'public');

            $ultimaVersao = $documento->versoes->max('numero_versao') ?? 1;

            $documento->versoes()->create([
                'caminho_arquivo' => $caminho,
                'numero_versao' => $ultimaVersao + 1,
            ]);
        }

        $documento->update($request->only(['titulo', 'categoria_id', 'localizacao_fisica', 'data_documento']));

        return redirect()->back()->with('success', 'Documento e versão atualizados!');
    }

    public function show($id)
{
    $documento = Documento::with(['versoes', 'categoria'])->findOrFail($id);
    
    $categorias = Categoria::all();

    return view('documentos.show', compact('documento', 'categorias'));
}

    public function destroy($id)
    {
        $documento = Documento::with('versoes')->findOrFail($id);
        
        foreach ($documento->versoes as $versao) {
            if (Storage::disk('public')->exists($versao->caminho_arquivo)) {
                Storage::disk('public')->delete($versao->caminho_arquivo);
            }
        }
        
        $documento->versoes()->delete();
        
        $documento->delete();
        
        return redirect()->route('documentos.index')->with('success', 'Documento excluído permanentemente!');
    }

}