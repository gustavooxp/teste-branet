<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Lista as categorias
    public function index() {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    // Salva a categoria no banco
    public function store(Request $request) {
        $request->validate(['nome' => 'required|min:2']);
        
        Categoria::create([
            'nome' => $request->nome
        ]);

        return redirect()->back()->with('success', 'Categoria criada com sucesso!');
    }
}