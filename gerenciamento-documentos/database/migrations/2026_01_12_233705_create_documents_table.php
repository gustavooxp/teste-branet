<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('documentos', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->date('data_documento');
        $table->string('localizacao_fisica');
        
        // Chave estrangeira ligando com a tabela de categorias
        $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
