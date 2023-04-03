<?php

namespace Database\Seeders;

use App\Models\Pointage;
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
        Pointage::factory(2)->create();
    }
}
