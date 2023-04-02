<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         if (User::query()->count() < 1) {
             $role_admin = Role::firstOrCreate(['nom' => 'admin']);
             User::factory()->create([
                 'name' => 'Alec Thompson',
                 'email' => 'admin@softui.com',
                 'password' => Hash::make('secret'),
                 'fonction' => 'admin',
                 'about' => "Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).",
                 'role_id' => $role_admin->id
             ]);
             User::factory()->create([
                 'name' => 'ivana',
                 'email' => 'yohivana794@gmail.com',
                 'fonction' => 'developpeuse',
                 'role_id'=> $role_admin->id,
                 'password' => Hash::make('secret'),
                 'about' => "Hi, I’m ivana, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).",
             ]);

             $this->call(PointageSeeder::class);
         }
    }
}
