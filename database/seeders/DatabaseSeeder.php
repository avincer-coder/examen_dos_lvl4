<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Articulo::factory(10)->create(); // Crea 10 registros utilizando el factory
        \App\Models\Detalle_ingreso::factory(10)->create(); // Crea 10 registros utilizando el factory
        \App\Models\Cliente::factory(10)->create(); // Crea 10 registros utilizando el factory
        \App\Models\Trabajador::factory(10)->create(); // Crea 10 registros utilizando el factory
        \App\Models\Venta::factory(10)->create(); // Crea 10 registros utilizando el factory
        \App\Models\Detalle_venta::factory(10)->create(); // Crea 10 registros utilizando el factory

    }
}
