<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('interests')->insert([
            'interes'=>'Conocer nuevos Frameworks',
            'user_id'=>1,
        ]);
        DB::table('interests')->insert([
            'interes'=>'Jugar con mis amigos en línea',
            'user_id'=>1,
        ]);
        DB::table('interests')->insert([
            'interes'=>'Conducir',
            'user_id'=>1,
        ]);

    }
}
