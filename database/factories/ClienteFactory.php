<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
//        $this->faker = new \Faker\Generator();
//        $this->faker->addProvider(new \Faker\Provider\pt_BR\Person($this->faker));
//        $this->faker->addProvider(new \Faker\Provider\pt_BR\PhoneNumber($this->faker));
        return [
            "nome" => $this->faker->name,
            "telefone" => $this->faker->phoneNumber
        ];
    }
}
