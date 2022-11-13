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
        Schema::create('Genero', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Descricao');
            $table->unsignedBigInteger('ID_Filme');
            $table->foreign('ID_Filme')->references('ID')->on('Filme');
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
        Schema::dropIfExists('Genero');
    }
};
