<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    protected $model = Pokemon::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo' => $this->faker->randomElement(['fuego', 'agua', 'planta']),
            'tamano' => $this->faker->randomElement(['grande', 'mediano', 'pequeno']),
            'peso' => $this->faker->randomFloat(2, 0.01, 999.99),
        ];
    }
}