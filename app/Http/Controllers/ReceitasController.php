<?php

namespace App\Http\Controllers;

use App\Enums\TipoUnidadeDeMedida;
use App\Models\Produto;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class ReceitasController extends Controller
{
    public function index(Request $request){
        $produtos = Produto::all();

        if($produtos){
            $produto = $produtos->first();
            $modos_de_preparo = $produto->modos_de_preparo()->get()->toArray();
            $ingredientes = $produto->ingredientes()->get()->toArray();
            dd($modos_de_preparo, $ingredientes);
        }

        return view('receitas');
    }

    public function store(Produto $produto){
        // dd($produto->modos_de_preparo()->first()->toArray());

//        $data = [
//            "descricao_do_passo" => "Passo 2",
//            "ordem" => 2
//        ];
//
//        $produto->modos_de_preparo()->create($data);

//        $data = [
//            "descricao" => "Maizena",
//            "unidadeDeMedida" => TipoUnidadeDeMedida::GRAMAS,
//            "quantidade" => 545
//        ];
//
//        $ingredientes = $produto->ingredientes()->create($data);

        $ingredientes = $produto->ingredientes()->get()->toArray();

        $receitas = $produto->modos_de_preparo()->get()->toArray();

        dd($ingredientes, $receitas);

        return view('receitas');
    }
}
