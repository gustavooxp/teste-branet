<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';

    protected $fillable = ['titulo', 'data_documento', 'localizacao_fisica', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function versoes()
    {
        return $this->hasMany(VersaoDocumento::class, 'documento_id');
    }
}