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

    public static function getDadosVisualizacao($id) : array{
        $pedido_find = Pedido::find($id);
        $pedido = $pedido_find->toArray();
        $cliente_find = $pedido_find->cliente()->first();
        $cliente = $cliente_find->toArray();
        $endereco = $cliente_find->endereco()->first();
        $cliente["endereco"] = "$endereco->cep, $endereco->rua, nº $endereco->numero, $endereco->bairro - $endereco->cidade";
        if($endereco->complemento && $endereco->referencia){
            $cliente["endereco"] .= ", $endereco->complemento, $endereco->referencia";
        } else if(!$endereco->referencia){
            $cliente["endereco"] .= ", $endereco->complemento";
        } else if(!$endereco->complemento){
            $cliente["endereco"] .= ", $endereco->referencia";
        }
        $produtos = $pedido_find->produtos()->get()->toArray();
        $valorTotal = 0;
        $count = 0;
        foreach ($produtos as $produto){
            $produtos[$count]["preco"] = $produto["pivot"]["preco"];
            $produtos[$count++]["quantidade"] = $produto["pivot"]["quantidade"];
            $valorTotal += $produto["pivot"]["preco"];
        }
        $pedido["valor_total"] = $valorTotal;
        return compact("pedido", "cliente", "produtos");
    }

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


