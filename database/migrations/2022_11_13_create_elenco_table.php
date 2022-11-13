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
        Schema::create('Elenco', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_Filme');
            $table->foreign('ID_Filme')->references('ID')->on('Filme');
            $table->unsignedBigInteger('Codigo_Ator');
            $table->foreign('Codigo_Ator')->references('Codigo')->on('Ator');
            $table->string('Papel');
            $table->string('Personagem');

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
        Schema::dropIfExists('Elenco');
    }
};
