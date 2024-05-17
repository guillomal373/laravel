<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Associate>
 */
class AssociateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_type' => $this->faker->randomElement(['Cédula De Ciudadanía', 'Número De Identificación Tributaria', 'Tarjeta De Identidad', 'Cédula De Extranjería', 'Pasaporte', 'Registro Civil']),
            'id_number' => $this->faker->randomNumber,
            'first_name' => $this->faker->name, //se llena con una oración
            'other_names' => $this->faker->name,
            'first_lastname' => $this->faker->lastName,
            'other_lastnames' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'status' => $this->faker->randomElement(['Activo', 'Inactivo'])
            //'description' => $this->faker->paragraph, //varias líneas
            //'id_expired_at'=> now(),
            //'birth_date'=> now(),
            //'email'=> fake()->safeEmail(),*/
        ];
    }
}
