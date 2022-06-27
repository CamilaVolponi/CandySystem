<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function index(Request $request){
        $funcionarios = Funcionario::all();
        return view('meusDadosProprietario', compact('funcionarios'));
    }

    public function create(Request $request){
        return view('meusDadosProprietario/meusDadosInserir');
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
