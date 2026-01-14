<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VersaoDocumento extends Model
{
    protected $table = 'versoes_documentos';

    protected $fillable = [
        'documento_id',
        'caminho_arquivo',
        'numero_versao'
    ];

    // Uma versão pertence a um documento
    public function documento()
    {
        return $this->belongsTo(Documento::class, 'documento_id');
    }
}