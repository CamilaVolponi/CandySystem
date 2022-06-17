<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Person($this->faker));
        $fakerU = $this->faker->unique();

        return [
            "cpf" => $fakerU->cpf(),
            "nome" => $this->faker->name(),
            "telefone" => $this->faker->phoneNumber(),
            "email" => $fakerU->email(),
            "senha" => $this->faker->password,
//            "cargo" =>  Passado pelo factory de Empresa,
//            "empresa_id" => Passado pelo factory de Empresa,
        ];
    }
}
