<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = "produtos";

    protected $fillable = [
        "nome", "preco"
    ];

    public function modos_de_preparo()
    {
        // (Referencia do Model da tabela | nome da coluna na tabela do model |
        // nome da coluna que serve como chave estrangeire na tabela atual)
        return $this->hasMany(ModoDePreparo::class, "produto_id", "id");
    }

    public function ingredientes(){
        return $this->hasMany(Ingrediente::class, "produto_id", "id");
    }

    public function pedidos(){
        // belongsToMany(<Model com quem se relaciona>,<tabela intermediária>, <atributo que se relaciona com o model Produto>, <atributo que se relaciona com o model Pedido>)
        return $this->belongsToMany(Pedido::class,"produto_pedido", "produto_id", "pedido_id");
    }
}
