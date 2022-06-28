<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function index(Request $request){
        if(auth()->user()->cargo == \App\Enums\TipoCargo::PROPRIETARIO){
            $funcionarios = Funcionario::all();
            $urlMeusDados = route('meusDados.index');
            $data = [
                "funcionarios" => $funcionarios,
                "urlMeusDados" => $urlMeusDados
            ];
            return view('meusDadosProprietario', compact('funcionarios', 'urlMeusDados'));
        } else if(auth()->user()->cargo == \App\Enums\TipoCargo::FUNCIONARIO){
            $funcionarios = Funcionario::all();
            $urlMeusDados = route('meusDados.index');
            $data = [
                "funcionarios" => $funcionarios,
                "urlMeusDados" => $urlMeusDados
            ];
            return view('meusDadosFuncionario', compact('funcionarios', 'urlMeusDados'));
        }
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
