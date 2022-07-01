<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresas";

    protected $fillable = [
        "cnpj" , "nome"
    ];

    public function produtos(){
        return $this->hasMany(Produto::class, "empresa_id","id");
    }

    public function pedidos(){
        return $this->hasMany(Pedido::class, "empresa_id","id");
    }

    public function funcionarios(){
        return $this->hasMany(Funcionario::class, "empresa_id","id");
    }
}
