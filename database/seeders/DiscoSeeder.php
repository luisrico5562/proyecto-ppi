<?php

namespace Database\Seeders;

use App\Models\Disco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disco::factory()->count(10)->create();
    }
}
