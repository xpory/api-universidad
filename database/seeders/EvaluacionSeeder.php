<?php

namespace Database\Seeders;

use App\Models\Evaluacion;
use Illuminate\Database\Seeder;

class EvaluacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $evaluacion = new Evaluacion();
        $evaluacion->evaluacion = "Evaluación 1";
        $evaluacion->save();

        $evaluacion2 = new Evaluacion();
        $evaluacion2->evaluacion = "Evaluación 2";
        $evaluacion2->save();

        $evaluacion3 = new Evaluacion();
        $evaluacion3->evaluacion = "Evaluación 3";
        $evaluacion3->save();

        $evaluacion4 = new Evaluacion();
        $evaluacion4->evaluacion = "Evaluación 4";
        $evaluacion4->save();

        $evaluacion5 = new Evaluacion();
        $evaluacion5->evaluacion = "Evaluación 5";
        $evaluacion5->save();
    }
}
