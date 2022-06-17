<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = "clientes";

    protected $fillable = [
      "nome", "telefone"
    ];

    public function getById(int $id) {
        return Cliente::find($id)->toArray();
    }

    public function getEnderecoFromCliente(int $id) {
        return Cliente::find($id)->endereco()->first()->toArray();
    }

    public function updateDataFromCliente(int $id, array $data){
        $endereco = Cliente::find($id)->endereco()->first();
        $endereco->update($data);
    }

    public function endereco(){
        return $this->hasOne(Endereco::class, "cliente_id", "id");
    }
}
