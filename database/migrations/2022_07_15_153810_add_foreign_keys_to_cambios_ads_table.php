<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCambiosAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cambios_ads', function (Blueprint $table) {
            $table->foreign(['alta_ads'], 'cambios_ads_ibfk_1')->references(['id'])->on('cat1adscripciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['baja_ads'], 'cambios_ads_ibfk_2')->references(['id'])->on('cat1adscripciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['motivo'], 'cambios_ads_ibfk_3')->references(['id'])->on('tipos_motivos_cambio_ads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['asignacion'], 'cambios_ads_ibfk_4')->references(['id'])->on('tipos_asignaciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['bloque'], 'cambios_ads_ibfk_5')->references(['id'])->on('tipos_bloques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cambios_ads', function (Blueprint $table) {
            $table->dropForeign('cambios_ads_ibfk_1');
            $table->dropForeign('cambios_ads_ibfk_2');
            $table->dropForeign('cambios_ads_ibfk_3');
            $table->dropForeign('cambios_ads_ibfk_4');
            $table->dropForeign('cambios_ads_ibfk_5');
        });
    }
}
