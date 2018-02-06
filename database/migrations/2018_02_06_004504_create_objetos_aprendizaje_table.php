<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetosAprendizajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetos_aprendizaje', function (Blueprint $table) {
            $table->increments('idOA');
            $table->string('ruta');
            $table->string('nombreOA');
            $table->string('autorOA');
            $table->text('descripcionOA');
            $table->date('fecha_creacion');
            $table->string('pClaveOA');
            $table->string('institucionOA');
            $table->string('tamanoOA');
            $table->string('tipoOA');
            $table->dateTime('fecha_ingreso')->useCurrent();
            $table->string('rutaZip');
            $table->integer('idProfesor');
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
        Schema::dropIfExists('objetos_aprendizaje');
    }
}
