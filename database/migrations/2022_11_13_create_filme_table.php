<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Filmes', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Titulo');
            $table->string('Diretor');
            $table->integer('Ano_Producao');
            $table->foreignId('Estudio_ID')->constrained('Estudios');
            $table->foreignId('Genero_ID')->constrained('Generos');
            $table->double('Custo_Producao');
            $table->double('Nota_Geral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Filmes');
    }
};
