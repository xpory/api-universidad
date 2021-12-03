<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno = new Usuario();
        $alumno->nombre = "Jerry Josué";
        $alumno->apellidos = "Argota Melgar";
        $alumno->email = "jerry_melgar@hotmail.com";
        $alumno->carnet = "2527972011";
        $alumno->foto = "https://conalepags.edu.mx/escolares/img/estudiante225x225.png";
        $alumno->password = Hash::make('123456');
        $alumno->save();

        $alumno2 = new Usuario();
        $alumno2->nombre = "Luis Ernesto";
        $alumno2->apellidos = "Cruz Ayala";
        $alumno2->email = "luis_hernesto@outlook.com";
        $alumno2->carnet = "2515302007";
        $alumno2->foto = "https://conalepags.edu.mx/escolares/img/estudiante225x225.png";
        $alumno2->password = Hash::make('123456');
        $alumno2->save();

    }
}
