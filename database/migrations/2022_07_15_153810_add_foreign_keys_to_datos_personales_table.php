<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datos_personales', function (Blueprint $table) {
            $table->foreign(['estado_nacimiento'], 'datos_personales_ibfk_1')->references(['id'])->on('tipos_estados_republica')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('datos_personales', function (Blueprint $table) {
            $table->dropForeign('datos_personales_ibfk_1');
        });
    }
}
