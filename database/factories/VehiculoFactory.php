<?php

namespace Database\Factories;

use App\Models\Vehiculo;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vehiculo>
 */
class VehiculoFactory extends Factory
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
                'Pipa de agua',
                'Autotanque',
                'Trailer de carga',
                'Camion de volteo',
                'Retroexcavadora'
            ]),
            'marca' => fake()->randomElement([
                'Kenworth',
                'Freightliner',
                'International',
                'Caterpillar',
                'Volvo'
            ]),
            'modelo' => fake()->bothify('MOD-####'),
            'anio' => fake()->numberBetween(2015, 2026),
            'placas' => fake()->unique()->bothify('???-####'),
            'capacidad' => fake()->numberBetween(10000, 30000),
            'precio_renta' => fake()->randomFloat(2, 3000, 15000),
            'estado' => fake()->randomElement([
                'Disponible',
                'Rentado',
                'Mantenimiento'
            ]),
            'categoria_id' => Categoria::inRandomOrder()->firstOrFail()->id
        ];
    }
}
