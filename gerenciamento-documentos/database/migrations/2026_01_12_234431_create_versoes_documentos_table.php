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
    Schema::create('versoes_documentos', function (Blueprint $table) {
        $table->id();
        // Liga a versão ao documento pai
        $table->foreignId('documento_id')->constrained('documentos')->onDelete('cascade');
        $table->string('caminho_arquivo'); // Onde o arquivo vai ficar no disco
        $table->integer('numero_versao');  // 1, 2, 3...
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versoes_documentos');
    }
};
