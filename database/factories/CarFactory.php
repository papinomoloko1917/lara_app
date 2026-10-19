<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => fake()->word(),
            'mechanic_id' => Mechanic::inRandomOrder()->value('id'),
        ];
    }
}
