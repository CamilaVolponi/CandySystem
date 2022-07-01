<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Produto;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
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
            $numeroDeProdutos = $this->faker->numberBetween(1, 15);
            Produto::factory($numeroDeProdutos)->create([
                "empresa_id" => $empresa->id
            ]);
        }
    }
}
