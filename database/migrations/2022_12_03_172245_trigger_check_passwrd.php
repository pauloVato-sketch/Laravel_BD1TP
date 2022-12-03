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
            
        CREATE TRIGGER tr_check_passwrd_ins
        BEFORE INSERT ON `Usuarios` FOR EACH ROW
        WHEN length(new.`Senha`)<5
        BEGIN
            SELECT RAISE(ABORT, `Not enough chars`);
        END;

        CREATE TRIGGER tr_check_passwrd_up
        BEFORE UPDATE ON `Usuarios` FOR EACH ROW
        WHEN length(new.`Senha`) < 5
        BEGIN
            SELECT RAISE(ABORT, `Not enough chars`);
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
            DROP TRIGGER `tr_check_passwrd_ins`;
            DROP TRIGGER `tr_check_passwrd_up`');
    }
};
