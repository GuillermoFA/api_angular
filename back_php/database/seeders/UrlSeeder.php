<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urls')->insert([
            'url'=>'https://twitter.com/straiikkk',
            'user_id'=>1,
        ]);
        DB::table('urls')->insert([
            'url'=>'https://www.instagram.com/guille.yb/',
            'user_id'=>1,
        ]);
        DB::table('urls')->insert([
            'url'=>'https://github.com/GuillermoFA',
            'user_id'=>1,
        ]);
    }
}
