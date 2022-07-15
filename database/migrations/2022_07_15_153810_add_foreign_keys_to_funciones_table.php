<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFuncionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funciones', function (Blueprint $table) {
            $table->foreign(['funcion'], 'funciones_ibfk_1')->references(['id'])->on('tipos_funciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funciones', function (Blueprint $table) {
            $table->dropForeign('funciones_ibfk_1');
        });
    }
}
