<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->unsignedBigInteger('num_emp')->index('num_emp');
            $table->string('asunto');
            $table->text('comentario');
            $table->string('oficio');
            $table->unsignedBigInteger('adscripcion')->index('comentarios_ibfk_2');
            $table->string('antecedente')->nullable();
            $table->date('fecha')->nullable();
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
        Schema::dropIfExists('comentarios');
    }
}
