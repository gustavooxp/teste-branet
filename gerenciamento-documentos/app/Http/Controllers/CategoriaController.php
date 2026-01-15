<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function store(Request $request)
{
    $request->validate(['nome' => 'required|unique:categorias|max:255']);
    Categoria::create($request->all());
    return redirect()->back()->with('success', 'Categoria criada!');
}

public function edit(Categoria $categoria)
{
    return view('categorias.edit', compact('categoria'));
}

public function update(Request $request, Categoria $categoria)
{
    $request->validate(['nome' => 'required|max:255|unique:categorias,nome,' . $categoria->id]);
    $categoria->update($request->all());
    return redirect('/categorias')->with('success', 'Categoria atualizada!');
}

public function destroy(Categoria $categoria)
{
    if ($categoria->documentos()->count() > 0) {
        return redirect()->back()->with('error', 'Não é possível excluir: existem documentos nesta categoria.');
    }

    $categoria->delete();
    return redirect()->back()->with('success', 'Categoria excluída!');
}
}