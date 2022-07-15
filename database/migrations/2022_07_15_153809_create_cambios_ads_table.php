<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambiosAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios_ads', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('alta_ads')->index('alta_ads');
            $table->unsignedBigInteger('baja_ads')->nullable()->index('baja_ads');
            $table->date('fecha');
            $table->unsignedBigInteger('motivo')->index('motivo');
            $table->string('oficio')->nullable();
            $table->text('comentarios')->nullable();
            $table->unsignedBigInteger('bloque')->nullable()->index('bloque');
            $table->string('antecedentes')->nullable();
            $table->string('vacaciones')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('asignacion')->index('asignacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cambios_ads');
    }
}
