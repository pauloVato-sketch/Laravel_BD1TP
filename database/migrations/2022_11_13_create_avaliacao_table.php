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
            $table->foreignId('Filme_ID')->constrained();
            $table->string('Usuario_Login');
            $table->foreign('Usuario_Login')->references('Login')->on('Usuarios');
            $table->float('Nota')->nullable();
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
        Schema::dropIfExists('Avaliacao');
    }
};
