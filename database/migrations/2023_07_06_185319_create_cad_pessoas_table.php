<?php

use Doctrine\DBAL\Schema\Table;
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
        Schema::create('cad_pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->float('cpf', 16)->unique();
            $table->float('contato', 11)->unique();
            $table->string('email')->unique();
            $table->string('genero', 15);
            $table->string('data_nascimento', 15);
            $table->string('cidade', 20);
            $table->string('bairro', 30);
            $table->string('rua', 30);
            $table->float('numero', 10);
            $table->string('complemento', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cad_pessoas');
    }
};
