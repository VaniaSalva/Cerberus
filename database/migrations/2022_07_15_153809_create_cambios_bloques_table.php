<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambiosBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios_bloques', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('num_emp')->index('idmumemp');
            $table->unsignedBigInteger('bloque_baja')->index('idblqbaja');
            $table->unsignedBigInteger('bloque_alta')->index('idblqalta');
            $table->unsignedBigInteger('motivo')->index('idmtvcmbblq');
            $table->string('oficio', 100);
            $table->text('comentarios')->nullable();
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
        Schema::dropIfExists('cambios_bloques');
    }
}
