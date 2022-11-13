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
        Schema::create('Estudio', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Nome');
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
        Schema::dropIfExists('Estudio');
    }
};