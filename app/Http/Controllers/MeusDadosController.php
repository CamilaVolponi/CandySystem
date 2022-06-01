<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function index(Request $request){
        return view('meus_dados');
    }

    public function endereco(){
        $cliente = Cliente::all()->first();

        return view('meus_dados', [
            "endereco" => $cliente->endereco()->first()->toArray()
        ]);
    }
}
