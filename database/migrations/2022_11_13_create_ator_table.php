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
        Schema::create('Atores', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Primeiro_Nome');
            $table->string('Nome_Meio')->nullable();
            $table->string('Ultimo_Nome');
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
        Schema::dropIfExists('Ator');
    }
};
