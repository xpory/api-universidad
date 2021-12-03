<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50)->comment('nombre del alumno');
            $table->string('apellidos',50)->comment('apellidos del alumno');
            $table->string('email',60)->unique()->comment('direccion de correo electronico personal');
            $table->string('carnet',12)->unique()->comment('carnet del estudiante');
            $table->string('foto')->comment('Foto de perfil del estudiante');
            $table->string('password')->comment('contraseña del estudiante');
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
        Schema::dropIfExists('usuarios');
    }
}
