<?php

namespace App\Models;

use App\Enums\TipoCargo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Funcionario extends Authenticatable
{
    use HasFactory;

    protected $table = "funcionarios";

    protected $guard = "web";

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
//        $this->attributes['senha'] = $value;
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }

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
