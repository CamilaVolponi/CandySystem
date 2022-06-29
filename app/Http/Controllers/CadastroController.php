<?php

namespace App\Http\Controllers;

use DB;
use App\Enums\TipoCargo;
use App\Models\Empresa;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(Request $request){
        return view('cadastro');
    }

    public function store(Request $request){
        $error = 0;
        DB::beginTransaction();

        $dadosEmpresa = $request->only(["cnpj", "nomeConfeitaria"]);
        $dadosEmpresa["nome"] = $dadosEmpresa["nomeConfeitaria"];
        unset($dadosEmpresa["nomeConfeitaria"]);

        $dadosFuncionario = $request->only(["cpf", "nomeProprietario", "email", "telefone", "senha", "confirmeSenha"]);
        $dadosFuncionario["nome"] = $dadosFuncionario["nomeProprietario"];
        $dadosFuncionario["cargo"] = TipoCargo::PROPRIETARIO;
        unset($dadosFuncionario["nomeProprietario"]);

        try {
            $empresa = Empresa::query()->create($dadosEmpresa);
            try {
                $empresa->funcionarios()->create($dadosFuncionario);
                DB::commit();
                $sucess = true;
            } catch (QueryException $e){
                DB::rollback();
                $error = 2; // Funcionario já pertence à alguma empresa
                $sucess = false;
            }
        } catch (QueryException $e){
            DB::rollback();
            $error = 1; // empresa já cadastrada
            $sucess = false;
        }

        if($sucess){
            DB::commit();
            return redirect('login')->with(["cpf" => $request->cpf]);
        } else {
            return redirect("cadastro")->with(["error" => $error])->withInput($request->input);
//            return view('cadastro', ['error' => true]);
        }
    }
}
