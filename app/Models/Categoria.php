<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Informamos ao Laravel que a tabela se chama 'categorias'
    protected $table = 'categorias';

    protected $fillable = ['nome'];

    // Um documento pertence a uma categoria
    public function documentos()
    {
        return $this->hasMany(Documento::class, 'categoria_id');
    }
}