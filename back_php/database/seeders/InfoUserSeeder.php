<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InfoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('info_users')->insert([
            'titulo'=>'Estudiante de PREGRADO',
            'contenido'=>'Estudiante de Ingeniería Civil en Computación e Informática en Universidad Católica del Norte, Antofagasta.',
            'user_id'=>1,
        ]);

    }
}
