<?php

namespace Database\Seeders;

use App\Models\Pedido;
use App\Models\Produto;
use App\Models\ProdutoPedido;
use Database\Factories\ProdutoPedidoFactory;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Factory::create("pt_BR");
        $pedidos = Pedido::all();
        $produtos = Produto::all();

        $countProdutos = count($produtos);

        foreach ($pedidos as $pedido){
            // Indica quantidade de produtos no pedido
            $numeroDeProdutos = $this->faker->numberBetween(1, 5);
            for ($i = 0; $i < $numeroDeProdutos; $i++) {
                // Pega produto aleatório
                $index_produto = $this->faker->numberBetween(1, $countProdutos - 1);
                $produto = $produtos[$index_produto];
                $pedido->produtos()->attach($produto->id, [
                    "quantidade" => $this->faker->numberBetween(1, 15),
                    "preco" => $produto->preco,
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
        }
    }
}
