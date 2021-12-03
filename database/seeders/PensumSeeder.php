<?php

namespace Database\Seeders;

use App\Models\Pensum;
use Illuminate\Database\Seeder;

class PensumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pensum = new Pensum();
        $pensum->carrera_id = 1;
        $pensum->plan_estudio_id = 1;
        $pensum->materia_id = 1;
        $pensum->save();

        $pensum2 = new Pensum();
        $pensum2->carrera_id = 1;
        $pensum2->plan_estudio_id = 1;
        $pensum2->materia_id = 2;
        $pensum2->save();

        $pensum2 = new Pensum();
        $pensum2->carrera_id = 1;
        $pensum2->plan_estudio_id = 1;
        $pensum2->materia_id = 3;
        $pensum2->save();
    }
}
