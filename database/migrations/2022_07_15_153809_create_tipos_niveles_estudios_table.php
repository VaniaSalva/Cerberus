<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposNivelesEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_niveles_estudios', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('nivel_estudio')->unique('niveles_estudios_nivel_estudio_unique');
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
        Schema::dropIfExists('tipos_niveles_estudios');
    }
}
