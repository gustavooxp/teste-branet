<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentoController; 
use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('home');
});


Route::get('/contato', function () {
    return view('contato');
})->name('contato');    


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');


Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos.index');
Route::get('/documentos/create', [DocumentoController::class, 'create'])->name('documentos.create'); // Rota para o formulário se for separado
Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');
Route::get('/documentos/{id}', [DocumentoController::class, 'show'])->name('documentos.show');
Route::put('/documentos/{id}', [DocumentoController::class, 'update'])->name('documentos.update');
Route::put('/documentos/{id}/categoria', [DocumentoController::class, 'updateCategoria'])->name('documentos.update-categoria');
Route::put('/documentos/{id}/localizacao', [DocumentoController::class, 'updateLocalizacao'])->name('documentos.update-localizacao');
Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy'])->name('documentos.destroy'); // Adicionei esta!