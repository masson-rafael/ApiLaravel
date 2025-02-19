<?php

namespace Database\Seeders;

use App\Models\DossierDeLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DossierDeLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DossierDeLocation::factory()->count(10)->create();
    }
}
