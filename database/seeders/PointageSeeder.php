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

    public function run()
    {
        pointage::factory(20)->create();
    }
}
