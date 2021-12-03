<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carrera_id')->comment('identificador de la carrera');
            $table->unsignedBigInteger('plan_estudio_id')->comment('plan de estudio a la que pertenece este pensum');
            $table->unsignedBigInteger('materia_id')->comment('identificador de las materias que pertenecen a este pensum');
            $table->timestamps();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('plan_estudio_id')->references('id')->on('plan_estudios');
            $table->foreign('materia_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pensums');
    }
}
