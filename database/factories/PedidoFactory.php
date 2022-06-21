<?php

namespace Database\Factories;

use App\Enums\TipoFormaDePagamento;
use App\Models\Cliente;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerU = $this->faker->unique();

        // getPessoa e getCliente
        $responsavel = Pessoa::all()->first()->toArray();
        $cliente = Cliente::all()->first()->toArray();

        var_dump($responsavel);

        $cases = TipoFormaDePagamento::cases();
        $sizeCases = count($cases);

        return [
            "responsavel_id" => $responsavel["id"],
            "cliente_id" => $cliente["id"],
            "data_entrega" => now(),
            "hora_entrega" => now(),
            "forma_pagamento" =>  $cases[$fakerU->numberBetween(0, $sizeCases-1)]
        ];
    }
}
