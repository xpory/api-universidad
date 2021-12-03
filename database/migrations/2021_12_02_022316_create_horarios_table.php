<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('materia_id')->comment('identificador de la materia');
            $table->unsignedBigInteger('pensum_id')->comment('identificador del pensum en curso');
            $table->unsignedBigInteger('usuario_id')->comment('identificador del alumno');
            $table->string('horario')->comment('horario de inscripcion');
            $table->string('seccion', 2)->comment('seccion en que pertenece la clase');
            $table->string('aula', 15)->comment('nombre del aula en la que se imparte la clase');
            $table->timestamps();
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('pensum_id')->references('id')->on('pensums');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
