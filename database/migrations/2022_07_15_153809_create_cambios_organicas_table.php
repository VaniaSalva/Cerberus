<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambiosOrganicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios_organicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_org')->index('idnum_org');
            $table->unsignedBigInteger('num_emp')->index('idnumemp_org');
            $table->unsignedBigInteger('adscripcion')->index('id_ads_org');
            $table->unsignedBigInteger('grado')->index('idgrado_org');
            $table->string('oficio', 45)->nullable();
            $table->date('fecha_oficio')->nullable();
            $table->text('comentarios')->nullable();
            $table->string('antecedente', 45)->nullable();
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
        Schema::dropIfExists('cambios_organicas');
    }
}
