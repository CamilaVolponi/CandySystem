<?php

namespace App\Models;

use App\Enums\TipoUnidadeDeMedida;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $table = "ingredientes";

    protected $fillable = [
        "descricao",
        "unidadeDeMedida",
        "quantidade"
    ];

    protected $casts = [
        "unidadeDeMedida" => TipoUnidadeDeMedida::class
    ];
}
