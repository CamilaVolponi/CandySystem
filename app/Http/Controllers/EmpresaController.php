<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(Request $request){
        if(auth()->user()->cargo == \App\Enums\TipoCargo::PROPRIETARIO){
            $funcionarios = Funcionario::all();
            return view('dadosEmpresaProprietario', compact('funcionarios'));
        } else if(auth()->user()->cargo == \App\Enums\TipoCargo::FUNCIONARIO){
            $funcionarios = Funcionario::all();
            return view('dadosEmpresaFuncionario', compact('funcionarios'));
        }
//        return view('dadosEmpresa');
    }
}
