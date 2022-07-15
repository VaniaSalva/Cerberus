<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartesNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partes_novedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('estatus_operativo')->index('estatus_operativo');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->text('comentario');
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
        Schema::dropIfExists('partes_novedades');
    }
}
