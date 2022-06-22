<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Endereco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = Cliente::all();

        foreach ($clientes as $cliente){
            Endereco::factory()->create([
                "cliente_id" => $cliente->id
            ]);
        }
    }
}
