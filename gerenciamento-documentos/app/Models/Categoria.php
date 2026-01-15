<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nome'];

    public function documentos()
    {
        return $this->hasMany(Documento::class, 'categoria_id');
    }
}