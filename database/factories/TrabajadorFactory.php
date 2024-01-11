<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
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
            'num_documento' => $this->faker->unique()->numerify('##########'), // 10 números aleatorios
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'acceso' => $this->faker->randomElement(['Admin', 'Empleado']),
            'usuario' => $this->faker->userName,
            'password' => bcrypt('password'), // Puedes personalizar la generación de contraseñas según tus necesidades
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
