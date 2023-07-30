<?php

namespace Database\Seeders;

use App\Models\Designers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Designers::factory()->count(10)->create();
    }
}
