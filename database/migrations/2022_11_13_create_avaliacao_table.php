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
        Schema::create('Avaliacao', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_Filme');
            $table->foreign('ID_Filme')->references('ID')->on('Filme');
            $table->unsignedBigInteger('ID_Usuario');
            $table->foreign('ID_Usuario')->references('ID')->on('Usuario');
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
