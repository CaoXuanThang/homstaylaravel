<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Designers;
use Illuminate\Database\Seeder;

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
            New_categoriesSeeder::class,
            NewsSeeder::class,
            Marketing_bannersSeeder::class,
            Real_estate_categoriesSeeder::class,
            Real_estatesSeeder::class,
            UsersSeeder::class,
            DesignersSeeder::class
        ]);
    }
}
