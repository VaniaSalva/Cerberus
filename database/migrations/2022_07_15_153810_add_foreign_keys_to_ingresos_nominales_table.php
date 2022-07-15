<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIngresosNominalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ingresos_nominales', function (Blueprint $table) {
            $table->foreign(['tipo_ingreso'], 'ingresos_nominales_ibfk_1')->references(['id'])->on('tipos_ingresos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ingresos_nominales', function (Blueprint $table) {
            $table->dropForeign('ingresos_nominales_ibfk_1');
        });
    }
}
