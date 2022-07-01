<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Factory::create("pt_BR");
        $numeroDeEmpresas = $this->faker->numberBetween(1, 7);
        Empresa::factory($numeroDeEmpresas)->create();
    }
}
