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
        "forma_pagamento" => TipoFormaDePagamento::class
        //"data_entrega" => "date:d/m/Y",
        //"hora_entrega" => "datetime:H:i"
    ];

    public function produtos(){
        // belongsToMany(<Model com quem se relaciona>,<tabela intermediária>, <atributo que se relaciona com o model Pedido>, <atributo que se relaciona com o model Produto>)
        return $this->belongsToMany(Produto::class,"produto_pedido", "pedido_id", "produto_id")->withPivot("quantidade", "preco");;
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class, "cliente_id", "id");
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class, "empresa_id", "id");
    }
}


