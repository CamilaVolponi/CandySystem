<?php

namespace Database\Factories;

use App\Enums\TipoUnidadeDeMedida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ModoDePreparoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakerU = $this->faker->unique(true, 15000);
        $count = $fakerU->randomDigitNotZero();

        return [
            "descricao_do_passo" => "Passo " . $count,
            "ordem" => $count
        ];
    }
}
