<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModoDePreparo extends Model
{
    use HasFactory;

    protected $table = "modos_de_preparo";

    protected $fillable = [
        "descricao_do_passo",
        "ordem"
    ];
}
