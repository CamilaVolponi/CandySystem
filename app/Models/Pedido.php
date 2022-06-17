<?php

namespace App\Models;

use App\Enums\TipoFormaDePagamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "pedidos";

    protected $fillable = [
        "cliente_id", "pessoa_id",
        "forma_pagamento", "data_entrega", "hora_entrega"
    ];

    protected $casts = [
        "forma_pagamento" => TipoFormaDePagamento::class,
        "data_entrega" => "datetime:dd-mm-YYYY",
        "hora_entrega" => "datatime:HH:00"
    ];

    public function produtos(){
        // belongsToMany(<Model com quem se relaciona>,<tabela intermediária>, <atributo que se relaciona com o model Pedido>, <atributo que se relaciona com o model Produto>)
        return $this->belongsToMany(Produto::class,"produto_pedido", "pedido_id", "produto_id");
    }
}
