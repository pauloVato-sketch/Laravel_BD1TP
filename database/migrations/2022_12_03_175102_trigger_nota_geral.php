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
        CREATE TRIGGER tr_nota_geral_ins
        AFTER INSERT ON `Avaliacoes` for each row
        BEGIN
            UPDATE `Filmes`
                SET
                `Nota_Geral` = (select AVG(A.nota) from Avaliacoes A group by A.filme_id having A.filme_id = new.filme_id)
                WHERE
                `ID` = new.Filme_ID;
        END;


        CREATE TRIGGER tr_nota_geral_up
        AFTER update ON `Avaliacoes` for each row
        BEGIN
            UPDATE `Filmes`
                SET
                `Nota_Geral` = (select AVG(nota) from Avaliacoes A group by A.filme_id having A.filme_id = new.filme_id)
                WHERE
                `ID` = new.`Filme_ID`;
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
        DROP TRIGGER tr_nota_geral_ins;
        DROP TRIGGER tr_nota_geral_up;
        ');
    }
};
