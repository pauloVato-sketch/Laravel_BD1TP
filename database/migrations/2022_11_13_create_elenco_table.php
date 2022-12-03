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
        Schema::create('Elencos', function (Blueprint $table) {
            $table->string('Filme_ID');
            $table->foreign('Filme_ID')->references('ID')->on('Filmes');
            $table->string('Ator_ID');
            $table->foreign('Ator_ID')->references('ID')->on('Atores');
            $table->string('Papel');
            $table->string('Personagem');

            $table->timestamps();

            $table->primary(['Filme_ID', 'Ator_ID']);

        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Elencos');
    }
};
