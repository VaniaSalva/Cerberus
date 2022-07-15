<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCisecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cisec', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_emp')->nullable()->index('num_emp');
            $table->string('examen');
            $table->date('fecha');
            $table->unsignedBigInteger('lugar')->index('lugar');
            $table->string('estatus');
            $table->unsignedBigInteger('adscripcion')->index('adscripcion');
            $table->text('comentarios');
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
        Schema::dropIfExists('cisec');
    }
}
