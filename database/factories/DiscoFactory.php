<?php

namespace Database\Factories;
use App\Models\Artista;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disco>
 */
class DiscoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $artistas = Artista::all();
        return [
            'nombre' => $this->faker->name(),
            'genero' => $this->faker->word(),
            'year' => $this->faker->year(),
            'precio' => $this->faker->randomFloat(2, 100, 400),
            'artista_id' => $artistas->random()->id
        ];
    }
}
