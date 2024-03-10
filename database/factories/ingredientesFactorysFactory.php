<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recetas>
 */
class ingredientessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'cantidad' => $this->faker->randomFloat(2, 0, 100),
            'procedencia' => $this->faker->word,
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
