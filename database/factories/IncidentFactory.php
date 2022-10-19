<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->word(),
            'description' => fake()->sentence(),
            'criticality' => fake()->randomElement(['Alta', 'Média', 'Baixa']),
            'type' => fake()->randomElement(['Alarme','Incidente','Outros']),
            'status' => fake()->boolean()
        ];
    }
}
