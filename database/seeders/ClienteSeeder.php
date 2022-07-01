<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Endereco;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Factory::create("pt_BR");
        $numeroDeClientes = $this->faker->numberBetween(1, 10);
        Cliente::factory($numeroDeClientes)->create();
    }
}
