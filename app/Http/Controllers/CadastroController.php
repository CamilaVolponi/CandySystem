<?php

namespace App\Http\Controllers;

use DB;
use App\Enums\TipoCargo;
use App\Models\Empresa;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    private $funcionario;
    private $empresa;

    public function __construct(Empresa $empresa, Funcionario $funcionario){
        $this->funcionario = $funcionario;
        $this->empresa = $empresa;
    }

    public function index(Request $request){
        return view('cadastro');
    }

    public function store(Request $request){
        DB::transaction(function() use($request){
            dd(
                $request->only(["cnpj", "nomeConfeitaria" => "nome"]),
                $request->only(["cpf", "nomeProprietario", "email", "telefone", "senha", "confirmeSenha"])
            );

            $dadosEmpresa = ["cnpj", "nome" => "nomeConfeitaria"];
            $empresa = $this->empresa->create($request->only());

            $dadosFuncionario = $this->funcionario->create($request->only(["cpf", "nomeProprietario", "email", "telefone", "senha", "confirmeSenha"]));
            array_merge($dadosFuncionario, [
                "cargo" => TipoCargo::PROPRIETARIO,
                "empresa_id" => $empresa->id
            ]);

            $funcionario = $this->funcionario->create($dadosFuncionario);
        });

        return redirect('login');
    }
}
