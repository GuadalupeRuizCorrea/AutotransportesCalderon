<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Servicio>
 */
class ServicioFactory extends Factory
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
                'Riego de carreteras',
                'Transporte de agua',
                'Transporte de materiales',
                'Control de polvo',
                'Mantenimiento vial',
                'Apoyo en construccion'
            ]),
            'descripcion' => fake()->sentence()
        ];
    }
}
