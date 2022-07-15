<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionesAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formaciones_academicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('nivel')->index('nivel');
            $table->unsignedBigInteger('especialidad')->index('especialidad');
            $table->unsignedBigInteger('estatus')->index('estatus');
            $table->unsignedBigInteger('escolaridad')->index('escolaridad');
            $table->date('fecha_engreso')->nullable();
            $table->unsignedBigInteger('idioma_dialecto')->index('idioma_dialecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formaciones_academicas');
    }
}
