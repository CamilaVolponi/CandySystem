<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProdutoFactory extends Factory
{
    private function getNome(\Faker\UniqueGenerator $f) : string{
        $functions = get_class_methods(\FakerRestaurant\Provider\pt_BR\Restaurant::class);

        // array_values para resetar os indices
        $functions = array_values(array_filter($functions, function($function) {
            // Nomes de produtos alimentícios (fonte documentação)
            $acepts = ["foodName","beverageName"];
            return in_array($function, $acepts);
        }));
        $functionName = $functions[$f->numberBetween(0, count($functions)-1)];
        return $f->{$functionName}();
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($this->faker));
        $fakerU = $this->faker->unique(true);
        return [
            "nome" => $this->getNome($fakerU),
            "preco" => $this->faker->randomFloat(2, 0, 100)
        ];
    }
}
