<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{
    use HasFactory;

    protected $table = "produto_pedido";

    protected $fillable = [
        "quantidade", "preco", "pedido_id", "produto_id"
    ];
}
