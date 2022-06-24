<?php

namespace Database\Factories;

use App\Enums\TipoFormaDePagamento;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Funcionario;
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
        $empresas = Empresa::all();
        $clientes = Cliente::all();

        $empresaAleatoria = $this->faker->numberBetween(1, count($empresas) - 1);
        $clienteAleatorio = $this->faker->numberBetween(1, count($clientes) - 1);

        $empresa = $empresas[$empresaAleatoria];
        $cliente = $clientes[$clienteAleatorio];

        $cases = TipoFormaDePagamento::cases();
        $sizeCases = count($cases);

        return [
            "data_entrega" => now(),
            "hora_entrega" => now(),
            "forma_pagamento" =>  $cases[$this->faker->numberBetween(0, $sizeCases-1)],
            "empresa_id" => $empresa->id,
            "cliente_id" => $cliente->id
        ];
    }
}
