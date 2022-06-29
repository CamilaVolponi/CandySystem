<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(Request $request){
        return view('dadosEmpresa');
    }

}
