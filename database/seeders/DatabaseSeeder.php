<?php

namespace Database\Seeders;

use App\Models\Produto;
use Database\Factories\ProdutoFactory;
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
        $this->call(ProdutoSeeder::class);
        $this->call(ClienteSeeder::class);
    }
}
