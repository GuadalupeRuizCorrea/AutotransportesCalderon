<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Vehiculo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear el usuario principal solo si no existe
        User::firstOrCreate(
            ['email' => 'Guadalupe@itsch.edu.mx'],
            [
                'name' => 'Guadalupe Ruiz',
               
            ]
        );

        // Crear 19 usuarios con correos únicos
        User::factory(19)->create([
            'email' => fn () => 'usuario_' . Str::uuid() . '@example.com',
        ]);

        // Crear categorías, servicios y vehículos
        Categoria::factory(5)->create();
        Servicio::factory(10)->create();
        Vehiculo::factory(50)->create();

        // Asignar de 1 a 5 servicios aleatorios a cada vehículo
        $vehiculos = Vehiculo::all();
        $servicios = Servicio::all();

        foreach ($vehiculos as $vehiculo) {
            $vehiculo->servicios()->sync(
                $servicios->random(rand(1, 5))
                    ->pluck('id')
                    ->toArray()
            );
        }
    }
}

