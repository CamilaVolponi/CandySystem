<?php

namespace Database\Seeders;

use App\Enums\TipoCargo;
use App\Enums\TipoUnidadeDeMedida;
use App\Models\Ingrediente;
use App\Models\ModoDePreparo;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cases = TipoCargo::cases();
        $sizeCases = count($cases);

        Produto::factory(5)
            ->create()
            ->each(function ($produto){
                Ingrediente::factory(5)->create([
                    "produto_id" => $produto->id
                ]);
                ModoDePreparo::factory(3)->create([
                    "produto_id" => $produto->id,
                ]);
            })
        ;
    }
}
