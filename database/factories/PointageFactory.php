<?php

namespace Database\Factories;

use App\Models\pointage;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'signature' => 1,
            'heure_A' => $this->faker->time(),
            'heure_D' => $this->faker->time(),
            'total_hours' => rand(8,15),
            'user_id' =>1,
            'created_at'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
