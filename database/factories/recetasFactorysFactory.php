<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recetas>
 */
class recetassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence,
            'ingredientes' => $this->faker->paragraph,
            'dificultad' => $this->faker->numberBetween(1, 100),
            'foto' => $this->faker->imageUrl(), // Aquí puedes generar una URL de imagen aleatoria
            'descripcion' => $this->faker->paragraphs(3, true),
        ];
    }
}
