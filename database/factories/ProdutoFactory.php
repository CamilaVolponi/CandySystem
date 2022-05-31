<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => "Produto " . $this->faker->randomDigitNotNull,
            "preco" => $this->faker->randomFloat(2, 0, 100)
        ];
    }
}
