<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use App\Models\Produto;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Factory::create("pt_BR");
        $produtos = Produto::all();

        foreach ($produtos as $produto){
            $count = $this->faker->numberBetween(1, 10);
            Ingrediente::factory($count)->create([
                "produto_id" => $produto->id
            ]);
        }
    }
}
