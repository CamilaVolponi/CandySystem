<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Pedido;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Factory::create("pt_BR");
        $empresas = Empresa::all();
        foreach ($empresas as $empresa){
            $numeroDePedidos = $this->faker->numberBetween(1, 10);
            Pedido::factory($numeroDePedidos)->create([
                "empresa_id" => $empresa->id
            ]);
        }
    }
}
