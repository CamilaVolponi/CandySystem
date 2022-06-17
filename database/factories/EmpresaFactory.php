<?php

namespace Database\Factories;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Company($this->faker));
        $fakerU = $this->faker->unique(true);
        return [
            "cnpj" => $fakerU->cnpj(),
            "nome" => $fakerU->company()
        ];
    }
}
