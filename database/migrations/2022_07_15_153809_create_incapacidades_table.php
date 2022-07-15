<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncapacidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incapacidades', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('num_emp');
            $table->integer('dias');
            $table->text('diagnostico');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->integer('folio_incapacidad');
            $table->integer('consecutivo');
            $table->unsignedBigInteger('tipo_incapacidad')->index('tipo_incapacidad');
            $table->string('cedula_Dr');
            $table->string('nombre_medico');
            $table->unsignedBigInteger('adscripcion')->index('adscripcion');
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
        Schema::dropIfExists('incapacidades');
    }
}
