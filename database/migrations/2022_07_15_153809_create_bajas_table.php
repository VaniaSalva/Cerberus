<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('adscripcion')->index('adscripcion');
            $table->date('fecha_coper');
            $table->unsignedBigInteger('motivo_coper')->index('motivo_coper');
            $table->unsignedBigInteger('grado')->index('grado');
            $table->unsignedBigInteger('tipo_baja')->index('tipo_baja');
            $table->date('fecha_corte_ssp');
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
        Schema::dropIfExists('bajas');
    }
}
