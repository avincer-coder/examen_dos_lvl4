<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'fecha_nacimiento' => $this->faker->date,
            'tipo_documento' => $this->faker->randomElement(['DNI', 'Pasaporte']),
            'num_documento' => $this->faker->unique()->numerify('##########'), // 10 números aleatorios
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
