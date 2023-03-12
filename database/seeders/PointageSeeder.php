<?php

namespace Database\Seeders;

use App\Models\pointage;
use Illuminate\Database\Seeder;

class PointageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        pointage::factory(20)->create();
    }
}
