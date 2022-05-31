<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos";

    public function modos_de_preparo()
    {
        // Referencia do Model da tabela | nome da coluna na tabela do model | nome da coluna que serve como chave estrangeire na tabela atual
        return $this->hasMany(ModoDePreparo::class, "produto_id", "id");
    }

    public function ingredientes(){
        return $this->hasMany(Ingrediente::class, "produto_id", "id");
    }
}
