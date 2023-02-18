<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use  Database\Seeders\pointageSeeder;
use App\Models\User;
//use  Database\Factories\pointagesFactory

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //   //  User::factory()->create([
    //         //'name' => 'Alec Thompson',
    //       'email' => 'admin@softui.com',
    //         'password' => Hash::make('secret'),
    //         'about' => "Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).",
    //     ]);
    $this->call(pointageSeeder::class);

    }
}
