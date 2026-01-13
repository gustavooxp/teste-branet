<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController; 
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

// AS NOVAS ROTAS DE DOCUMENTOS 
Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');