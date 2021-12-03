<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrera = new Carrera();
        $carrera->carrera = "Ingenieria En Sistemas y Computación";
        $carrera->save();
        $carrera2 = new Carrera();
        $carrera2->carrera = "Licenciatura en Informática";
        $carrera2->save();
    }
}
