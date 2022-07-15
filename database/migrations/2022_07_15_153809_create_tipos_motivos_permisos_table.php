<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposMotivosPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_motivos_permisos', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('motivo', 45);
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
        Schema::dropIfExists('tipos_motivos_permisos');
    }
}
