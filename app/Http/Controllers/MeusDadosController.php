<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function index(Request $request){
        return view('meusDadosProprietario');
    }

    public function endereco(Request $request){
//        $cliente = Cliente::all()->first();
        $id = $request->toArray()["id"];
        $cliente = new Cliente();

        $data = [
            "numero" => 59,
            "complemento" => "Bloco B"
        ];

//        $cliente->updateDataFromCliente($id, $data);

        dd($data);

        return view('meus_dados', [
            "endereco" => $cliente->endereco()->first()->toArray()
        ]);
    }
}
