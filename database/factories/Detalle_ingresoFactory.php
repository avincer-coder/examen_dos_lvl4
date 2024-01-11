<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_ingreso>
 */
class Detalle_ingresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ingreso' => $this->faker->uuid,
            'articulos_id' => \App\Models\Articulo::factory(),
            'precio_compra' => $this->faker->randomFloat(2, 1, 100),
            'precio_venta' => $this->faker->randomFloat(2, 1, 150),
            'stock_inicial' => $this->faker->randomNumber(3),
            'stock_actual' => $this->faker->randomNumber(3),
            'fecha_produccion' => $this->faker->date,
            'fecha_vencimiento' => $this->faker->date,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
