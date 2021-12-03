<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materia = new Materia();
        $materia->codigo = "FEPS-I";
        $materia->nombre = "FORMULACION Y EVALUACION DE PROYECTOS";
        $materia->uv = 4;
        $materia->save();

        $materia2 = new Materia();
        $materia2->codigo = "ETPS3-T";
        $materia2->nombre = "TÉCNICAS DE CALIDAD DE SOFTWARE";
        $materia2->uv = 4;
        $materia2->save();

        $materia3 = new Materia();
        $materia3->codigo = "ETPS4-T";
        $materia3->nombre = "NORMAS Y ESTÁNDARES INTERNACIONALES";
        $materia3->uv = 4;
        $materia3->save();

        $materia4 = new Materia();
        $materia4->codigo = "ESTP-T";
        $materia4->nombre = "ESTÁNDARES DE PROGRAMACIÓN";
        $materia4->uv = 4;
        $materia4->save();

        $materia5 = new Materia();
        $materia5->codigo = "SIOP-T";
        $materia5->nombre = "SISTEMAS OPERATIVOS";
        $materia5->uv = 4;
        $materia5->save();

    }
}
