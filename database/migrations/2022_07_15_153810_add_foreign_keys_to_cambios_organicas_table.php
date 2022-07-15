<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCambiosOrganicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cambios_organicas', function (Blueprint $table) {
            $table->foreign(['grado'], 'cambios_organicas_ibfk_1')->references(['id'])->on('grados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['adscripcion'], 'cambios_organicas_ibfk_2')->references(['id'])->on('cat1adscripciones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['num_org'], 'cambios_organicas_ibfk_3')->references(['num_org'])->on('organicas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cambios_organicas', function (Blueprint $table) {
            $table->dropForeign('cambios_organicas_ibfk_1');
            $table->dropForeign('cambios_organicas_ibfk_2');
            $table->dropForeign('cambios_organicas_ibfk_3');
        });
    }
}
