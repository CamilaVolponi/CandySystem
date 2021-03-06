<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Address($this->faker));

        return [
            "cep" => $this->faker->postcode,
            "rua" => $this->faker->streetName,
            "bairro" => "bairro da cidade " . $this->faker->city,
            "cidade" => $this->faker->city,
            "numero" => $this->faker->buildingNumber,
            "complemento" => $this->faker->optional()->secondaryAddress(), //text
            "referencia" => "perto da " . $this->faker->optional()->streetAddress(), // text
//            "cliente_id" => $cliente->id // passado pelo seeder
        ];
    }
}
