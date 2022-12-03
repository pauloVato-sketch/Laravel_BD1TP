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
        CREATE TRIGGER tr_verify_score_ins
        AFTER INSERT ON `Avaliacoes` for each row
        WHEN new.Nota < 0 OR new.Nota > 10
        BEGIN
 			SELECT RAISE(abort, `Nota Inválida.`);
        END;

        CREATE TRIGGER tr_verify_score_up
        AFTER UPDATE ON `Avaliacoes` for each row
        WHEN new.Nota < 0 OR new.nota > 10
        BEGIN
			SELECT RAISE(abort, `Nota Inválida.`);
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
        DROP TRIGGER tr_verify_score_low_ins;
        DROP TRIGGER tr_verify_score_low_up;
        DROP TRIGGER tr_verify_score_high_ins;
        DROP TRIGGER tr_verify_score_high_up;
        ');
    }
};
