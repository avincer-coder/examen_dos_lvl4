<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_venta>
 */
class Detalle_ventaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ventas_id' => \App\Models\Venta::factory(),
            'detalle_ingresos_id' => \App\Models\Detalle_ingreso::factory(),
            'cantidad' => $this->faker->randomNumber(2),
            'precio_venta' => $this->faker->randomNumber(3),
            'descuento' => $this->faker->randomNumber(2),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
