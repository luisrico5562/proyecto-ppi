<?php

namespace Database\Factories;
use App\Models\Artista;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artista>
 */
class ArtistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'pais' => $this->faker->country(),
            'descripcion' => fake()->sentence()
        ];
    }
}
