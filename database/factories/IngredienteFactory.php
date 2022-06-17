<?php

namespace Database\Factories;

use App\Enums\TipoUnidadeDeMedida;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingrediente>
 */
class IngredienteFactory extends Factory
{
    private function getDescription(\Faker\UniqueGenerator $f) : string{
        $functions = get_class_methods(\FakerRestaurant\Provider\pt_BR\Restaurant::class);

        // array_values para resetar os indices
        $functions = array_values(array_filter($functions, function($function) {
            // Nomes ingredientes para produtos alimentícios (fonte documentação)
            $acepts = ["dairyName","vegetableName","fruitName","meatName","sauceName"];
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
    public function definition()
    {
        $this->faker->addProvider(new \FakerRestaurant\Provider\pt_BR\Restaurant($this->faker));
        $fakerU = $this->faker->unique(true);

        $cases = TipoUnidadeDeMedida::cases();
        $sizeCases = count($cases);
        return [
            "descricao" => $this->getDescription($fakerU),
            "unidadeDeMedida" =>
                $cases[$fakerU->numberBetween(0, $sizeCases-1)],
            "quantidade" => $fakerU->randomFloat(2, 0, 100)
        ];
    }
}
