<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organicas', function (Blueprint $table) {
            $table->unsignedBigInteger('num_org')->primary();
            $table->string('puesto', 45);
            $table->string('compañía', 45);
            $table->string('seccion', 45)->nullable();
            $table->string('peloton', 45)->nullable();
            $table->string('escuadra', 45)->nullable();
            $table->unsignedBigInteger('grado_puesto')->index('idgrado');
            $table->unsignedBigInteger('bloque')->index('idbloque');
            $table->timestamp('create_time')->nullable()->useCurrent();
            $table->timestamp('update_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organicas');
    }
}
