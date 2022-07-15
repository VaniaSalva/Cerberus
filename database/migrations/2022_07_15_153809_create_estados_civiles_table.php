<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosCivilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_civiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('edo_civil')->index('edo_civil');
            $table->date('fecha');
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
        Schema::dropIfExists('estados_civiles');
    }
}
