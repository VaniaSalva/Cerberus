<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambiosGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios_grados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->unsignedBigInteger('grado_baja')->nullable()->index('idgradobaja');
            $table->unsignedBigInteger('grado_alta')->index('cambios_grados_ibfk_2');
            $table->date('fecha_ascenso')->nullable();
            $table->unsignedBigInteger('motivo_camb_grado')->index('idcambiogrado');
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
        Schema::dropIfExists('cambios_grados');
    }
}
