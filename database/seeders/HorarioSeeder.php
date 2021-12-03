<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Seeder;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horario = new Horario();
        $horario->materia_id = 1;
        $horario->pensum_id = 1;
        $horario->usuario_id = 1;
        $horario->horario = "Lun - Mie 18:40 - 20:10";
        $horario->seccion = "01";
        $horario->aula = "AULA VIRTUAL";
        $horario->save();

        $horario = new Horario();
        $horario->materia_id = 2;
        $horario->pensum_id = 2;
        $horario->usuario_id = 1;
        $horario->horario = "Lun - Mie 06:30 - 08:00";
        $horario->seccion = "01";
        $horario->aula = "BJ-402";
        $horario->save();
    }
}
