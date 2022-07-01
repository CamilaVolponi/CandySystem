<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = [
      "cpf", "nome", "telefone"
    ];

    public function endereco(){
        return $this->hasOne(Endereco::class, "cliente_id", "id");
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class, "cliente_id","id");
    }
}
