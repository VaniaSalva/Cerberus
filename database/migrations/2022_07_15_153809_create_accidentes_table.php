<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accidentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->date('fecha');
            $table->string('oficio');
            $table->unsignedBigInteger('tipo_acc')->index('tipo_acc');
            $table->text('descripcion');
            $table->text('diagnostico');
            $table->date('fecha_oficio');
            $table->integer('año');
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
        Schema::dropIfExists('accidentes');
    }
}
