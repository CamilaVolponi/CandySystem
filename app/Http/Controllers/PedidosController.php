<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
//    public function index(Request $request){
//        $pedidos = Pedido::all();

//        $data = [
//            "pedidos" => []
//        ];

//        foreach($pedidos as $pedido){
//            $data["pedidos"] = $pedido->toArray();
//            $data["pedidos"]["cliente"] = $pedido->cliente()->first()->toArray();
//        }

//        dd($data);

//        return view('pedidos', $data);
//    }

    public function index(Request $request){
        $pedidos = Pedido::all();
        return view('pedidos',compact('pedidos'));
    }

    public function create(Request $request){
        $data = [
            "title" => "Inserir"
        ];
        return view('pedidos/pedidosInserir', compact("data"));
    }

    public function edit(Request $request, $id){
        $data = [
            "title" => "Editar",
            "id" => $id
        ];
        return view('pedidos/pedidosInserir', compact("data"));
    }

    public function show(Request $request){
        return view('pedidos/pedidosVisualizar');
    }
}
