<?php

namespace App\Models;

use App\Enums\TipoCargo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = "funcionarios";

    protected $fillable = [
        "cpf", "nome", "telefone", "email", "senha", "cargo"
    ];

    protected $casts = [
        "cargo" => TipoCargo::class
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class, "empresa_id", "id");
    }
}
