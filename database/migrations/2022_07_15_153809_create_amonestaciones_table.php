<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmonestacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amonestaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->date('fecha');
            $table->unsignedBigInteger('tipo_amonestacion')->index('tipo_amonestacion');
            $table->text('descripcion');
            $table->integer('horas');
            $table->string('oficio');
            $table->unsignedBigInteger('adscripcion')->index('adscripcion');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amonestaciones');
    }
}
