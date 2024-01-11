<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_venta' => $this->faker->uuid,
            'clientes_id' => \App\Models\Cliente::factory(),
            'trabajadors_id' => \App\Models\Trabajador::factory(),
            'fecha' => $this->faker->date,
            'tipo_comprobante' => $this->faker->randomElement([1, 2, 3]), // Puedes personalizar según tus necesidades
            'serie' => $this->faker->randomNumber(4),
            'correlativo' => $this->faker->unique()->numerify('########'), // 8 números aleatorios
            'igv' => $this->faker->randomFloat(2, 0, 100),
            'estado' => $this->faker->randomElement(['Pendiente', 'Aprobado', 'Cancelado']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
