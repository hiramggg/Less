<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement(['Toyota', 'Honda', 'Ford']),
            'modelo' => $this->faker->randomElement(['Deportivo', 'Familiar', 'TodoTerreno']),
            'fecha' => $this->faker->numberBetween(2000, 2022),
        ];
    }
}