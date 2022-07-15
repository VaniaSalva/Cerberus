<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funciones', function (Blueprint $table) {
            $table->timestamp('create_time')->nullable()->useCurrent();
            $table->timestamp('update_time')->nullable();
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('num_emp');
            $table->unsignedBigInteger('funcion')->index('funciones_ibfk_1');
            $table->date('fecha_inicio_funcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funciones');
    }
}
