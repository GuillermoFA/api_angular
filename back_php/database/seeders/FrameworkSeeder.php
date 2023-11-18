<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('frameworks')->insert([
            'framework'=>'Angular',
            'avance'=>'Basico',
            'user_id'=>1,
        ]);
        DB::table('frameworks')->insert([
            'framework'=>'React',
            'avance'=>'Basico',
            'user_id'=>1,
        ]);
        DB::table('frameworks')->insert([
            'framework'=>'Laravel',
            'avance'=>'Intermedio',
            'user_id'=>1,
        ]);
    }
}
