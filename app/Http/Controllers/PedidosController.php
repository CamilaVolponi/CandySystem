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
        $empresa_id = auth()->user()->getEmpresa()->id;
//        dd ($id);
        $pedidos = Pedido::where("empresa_id", $empresa_id)->get();
        return view('pedidos',compact('pedidos'));
    }

    public function create(Request $request){
        $data = [
            "title" => "Inserir"
        ];
        return view('pedidos/pedidosInserir', compact("data"));
    }
    // informações:
    //	- cliente: cpf, nome, telefone, endereco* OK
    //	- endereco: CEP, rua, bairro, cidade, numero, complemento, referencia OK
    //	- pedido: dia de entrega, horario da entrega e forma de pagamento OK
    //	- produto: lista de produtos com nome e quantidade

    public function edit(Request $request, $id){
        $data = [
            "title" => "Editar",
            "id" => $id
        ];
        $pedido_select = Pedido::find($id);

        $pedido = $pedido_select;
        $cliente = $pedido_select->cliente()->first();
        $endereco = $cliente->endereco()->first();
        $produtos = $pedido_select->produtos();

        dd($pedido->toArray(), $cliente->toArray(), $endereco->toArray(), $produtos);
        return view('pedidos/pedidosInserir', compact("data"));
    }

    public function show(Request $request, $id){
        return view('pedidos/pedidosVisualizar', Pedido::getDadosVisualizacaoPedido($id));
    }
}
