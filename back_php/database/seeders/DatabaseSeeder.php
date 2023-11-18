<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\UrlSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\InfoUserSeeder;
use Database\Seeders\InterestSeeder;
use Database\Seeders\FrameworkSeeder;
use Database\Seeders\DataPersonalSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            DataPersonalSeeder::class,
            FrameworkSeeder::class,
            InfoUserSeeder::class,
            InterestSeeder::class,
            UrlSeeder::class,
        ]);


    }
}
