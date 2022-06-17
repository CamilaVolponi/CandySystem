<?php

namespace App\Models;

use App\Enums\TipoCargo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = "pessoas";

    protected $fillable = [
        "cpf", "nome", "telefone", "email", "senha", "cargo"
    ];

    protected $casts = [
        "cargo" => TipoCargo::class
    ];
}
