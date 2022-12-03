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
        Schema::create('Avaliacoes', function (Blueprint $table) {
            $table->integer('Filme_ID');
            $table->foreign('Filme_ID')->references('ID')->on('Filmes');
            $table->integer('Usuario_ID');
            $table->foreign('Usuario_ID')->references('ID')->on('Usuarios');
            $table->float('Nota')->nullable();
            $table->timestamps();
            $table->primary(['Filme_ID', 'Usuario_ID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Avaliacoes');
    }
};
