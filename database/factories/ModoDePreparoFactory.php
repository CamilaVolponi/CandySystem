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
        $faker = \Faker\Factory::create();
        $fakerU = $faker->unique();
        $count = $fakerU->randomDigitNotZero();
        return [
            "descricao_do_passo" => "Passo " . $count,
            "ordem" => $count
        ];
    }
}
