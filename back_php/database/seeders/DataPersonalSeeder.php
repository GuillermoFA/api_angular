<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('data_personals')->insert([
            'edad'=>23,
            'pais'=>'Chile',
            'ciudad'=>'Antofagasta',
            'email'=>'guillermo.fuentes01@alumnos.ucn.cl',
            'user_id'=>1,
        ]);
    }
}
