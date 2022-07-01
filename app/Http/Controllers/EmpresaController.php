<?php

namespace App\Http\Controllers;

use App\Enums\TipoCargo;
use App\Models\Empresa;
use App\Models\Funcionario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index(Request $request){
        $empresa_id = auth()->user()->getEmpresa()->id;
        $funcionarios = Funcionario::where("empresa_id", $empresa_id)->get();
        $empresa = Empresa::where("id", $empresa_id)->get()->first();

        if(auth()->user()->cargo == \App\Enums\TipoCargo::PROPRIETARIO){
//            $funcionarios = Funcionario::all();
            return view('empresaProprietario/index', compact('funcionarios', 'empresa'));
        } else if(auth()->user()->cargo == \App\Enums\TipoCargo::FUNCIONARIO){
//            $funcionarios = Funcionario::all();
            return view('empresaFuncionario/index', compact('funcionarios', 'empresa'));
        }
//        return view('dadosEmpresa');
    }

    public function create(Request $request){
       return view('empresaProprietario/inserir');
    }

    public function store(Request $request){
        $empresa = auth()->user()->getEmpresa();
        $error = 0;
        DB::beginTransaction();

        $dadosFuncionario = $request->only(["cpf", "nome", "email", "telefone", "senha", "confirmeSenha"]);
        $dadosFuncionario["cargo"] = TipoCargo::FUNCIONARIO;

//        dd($dadosFuncionario);

        try {
            $empresa->funcionarios()->create($dadosFuncionario);
            DB::commit();
            $sucess = true;
        } catch (QueryException $e){
            DB::rollback();
//            dd($e);
            $error = 1; // Funcionario já pertence à alguma empresa
            $sucess = false;
        }

        if($sucess){
            return redirect("dados-empresa");
        } else {
            return redirect("dados-empresa/create")->with(["error" => $error])->withInput($request->input);
        }
//       return view('empresaProprietario/inserir');
    }

}
