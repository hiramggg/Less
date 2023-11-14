<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Crea 10 registros de ejemplo utilizando el model factory
        Car::factory(10)->create();
    }
}