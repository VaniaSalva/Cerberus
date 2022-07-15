<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCambiosBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cambios_bloques', function (Blueprint $table) {
            $table->foreign(['bloque_alta'], 'cambios_bloques_ibfk_1')->references(['id'])->on('tipos_bloques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['bloque_baja'], 'cambios_bloques_ibfk_2')->references(['id'])->on('tipos_bloques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cambios_bloques', function (Blueprint $table) {
            $table->dropForeign('cambios_bloques_ibfk_1');
            $table->dropForeign('cambios_bloques_ibfk_2');
        });
    }
}
