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
        Schema::create('cad_protocolos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_contribuidor', 50);
            $table->string('sac_contribuinte', 150);
            $table->string('setor', 50);
            $table->string('data_registro', 15);
            $table->binary('fotos', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cad_protocolos');
    }
};
