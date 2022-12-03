<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_desc_genero_low_ins
        BEFORE INSERT ON `Generos` for each row
        WHEN length(new.`Descricao`)>100
        BEGIN
            SELECT RAISE(ABORT, `Descricao inválida.`);
        END;

        CREATE TRIGGER tr_desc_genero_low_up
        BEFORE update ON `Generos` for each row
        WHEN length(new.`Descricao`)>100 
        BEGIN
            SELECT RAISE(ABORT, `Descrição Inválida.`);
        END;
    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
        DROP TRIGGER tr_desc_genero_low_ins;
        DROP TRIGGER tr_desc_genero_low_up;
        ');
    }
};
