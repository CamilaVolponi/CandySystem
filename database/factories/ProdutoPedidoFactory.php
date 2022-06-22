<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $produtos = Produto::all();

        $pedidos = Pedido::all();
        return [
            "quantidade" => $this->faker->numberBetween(0,15),
            "preco" => $this->faker->randomFloat(2,0,15),
//            "pedido_id" => "", // passado pelo Seeder
            "produto_id" => $produtos[$this->faker->numberBetween(0, count($produtos) - 1)]
        ];
    }
}
