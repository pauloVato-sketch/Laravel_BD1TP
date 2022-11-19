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
            $table->foreignId('Filme_ID')->constrained();
            $table->foreignId('Ator_ID')->constrained();
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
