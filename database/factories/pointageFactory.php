<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\pointage;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pointageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

              'signature'=>1,
            'heure_A' => $this->faker->time($format='H:i:s', $max='now'),
            'heure_D' =>$this->faker->time($format='H:i:s', $max='now'),
'user_id' =>1,
'created_at'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
