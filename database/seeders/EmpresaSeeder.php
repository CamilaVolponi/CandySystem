<?php

namespace Database\Seeders;

use App\Enums\TipoCargo;
use App\Models\Empresa;
use App\Models\Pessoa;
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
        $this->faker = Factory::create();
        $this->faker->addProvider(new \Faker\Provider\pt_BR\Person($this->faker));

        $cases = TipoCargo::cases();
        $sizeCases = count($cases);

        Empresa::factory(5)
            ->create()
            ->each(function ($empresa) use ($sizeCases, $cases) {
                // Uma empresa precisa ter apenas uma pessoa como proprietario-master
                Pessoa::factory(1)->create([
                    "cargo" => TipoCargo::PROPRIETARIO_MASTER,
                    "empresa_id" => $empresa->id
                ]);
                // Um empresa pode ter um ou mais pessoas como proprietário ou funcionário
                $numeroDeFuncionarios = $this->faker->numberBetween(1, 3);

                Pessoa::factory($numeroDeFuncionarios)->create([
                    // Gera "cargo" aleatório diferente de proprietário-master
                    "cargo" => $cases[$this->faker->numberBetween(1, $sizeCases-1)],
                    "empresa_id" => $empresa->id
                ]);
            })
        ;
    }
}
