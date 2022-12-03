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
        DB::unprepared("
        CREATE TRIGGER tr_ano_prod_up 
        BEFORE UPDATE ON `Filmes` for each row
        WHEN new.`Ano_Producao`<1900 or new.`Ano_Producao` > CAST(strftime('%Y', date()) as INTEGER)
        BEGIN
            SELECT RAISE(ABORT, `Ano de produção inválido.`);
        END;

        CREATE TRIGGER tr_ano_prod_ins
        BEFORE INSERT ON `Filmes` for each row
        WHEN new.`Ano_Producao` < 1900 or new.`Ano_Producao` > CAST(strftime('%Y', date()) as INTEGER)
        BEGIN
            SELECT RAISE(ABORT, `Ano de produção inválido.`);
        END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP TRIGGER `tr_ano_prod_up`;
            DROP TRIGGER `tr_ano_prod_ins`;
        ');
    }
};
