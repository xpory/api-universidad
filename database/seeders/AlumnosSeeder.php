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
        DB::table('usuarios')->insert([
            'nombre' => 'Jerry Josué',
            'apellidos' => 'Argota Melgar',
            'email' => 'jerry_melgar@hotmail.com',
            'carnet' => '2527972011',
            'foto' => 'https://conalepags.edu.mx/escolares/img/estudiante225x225.png',
            'password' => Hash::make('123456')
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Luis Ernesto',
            'apellidos' => 'Cruz Ayala',
            'email' => 'luis_hernesto@outlook.com',
            'carnet' => '2515302007',
            'foto' => 'https://conalepags.edu.mx/escolares/img/estudiante225x225.png',
            'password' => Hash::make('123456')
        ]);
    }
}
