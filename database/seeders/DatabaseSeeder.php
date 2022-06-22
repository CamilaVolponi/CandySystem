<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmpresaSeeder::class);
        $this->call(FuncionarioSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(IngredienteSeeder::class);
        $this->call(ModoDePreparoSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(EnderecoSeeder::class);
        $this->call(PedidoSeeder::class);
        $this->call(ProdutoPedidoSeeder::class);
    }
}
