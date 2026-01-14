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
        // ESTA LINHA É A QUE FALTA:
        $table->foreignId('documento_id')->constrained('documentos')->onDelete('cascade');
        $table->string('caminho_arquivo');
        $table->integer('numero_versao');
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
