<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('num_emp');
            $table->unsignedBigInteger('periodo');
            $table->unsignedBigInteger('ubicacion')->index('ubicacion');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->integer('folio');
            $table->string('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacaciones');
    }
}
