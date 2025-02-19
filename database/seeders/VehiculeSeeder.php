<?php

namespace Database\Seeders;

use App\Models\Vehicule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicule::factory()->count(10)->create();
    }
}
