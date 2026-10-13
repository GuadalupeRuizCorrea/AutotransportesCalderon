<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'nombre' => fake()->randomElement([
                'Pipas de agua',
                'Autotanques',
                'Trailers',
                'Camiones de volteo',
                'Maquinaria pesada'
            ]),
            'descripcion' => fake()->sentence()
        ];
    }
}
