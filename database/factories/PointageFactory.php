<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pointage;

/**
 * @extends Factory<pointage>
 */
class PointageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'signature' => 1,
            'heure_A' => $this->faker->time(),
            'heure_D' => $this->faker->time(),
            'user_id' => 1,
            'created_at'=>$this->faker->date(),
        ];
    }
}
