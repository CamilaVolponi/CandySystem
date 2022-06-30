<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Http\Request;
use Psy\Util\Json;

class PedidosController extends Controller
{
    public function index(Request $request){
        $empresa_id = auth()->user()->getEmpresa()->id;
        $pedidos = Pedido::where("empresa_id", $empresa_id)->get();
        return view('pedidos/index',compact('pedidos'));
    }

    public function create(Request $request){
        $empresa_id = auth()->user()->getEmpresa()->id;
        $produtos= Produto::where("empresa_id", $empresa_id)->get();
        return view('pedidos/inserir', compact('produtos'));
    }
    public function store(Request $request){
        dd($request->all());
    }
    public function getCliente(Request $request){
        $cpf = $request->only("cpf");

        $cliente = Cliente::where("cpf", $cpf)->get()->first();

//        dd($clienteExiste, $clienteNaoExiste);

        $data = [
            "existe" => $cliente != null,
        ];

        if($cliente){
            $cliente->endereco = $cliente->endereco()->first();
            $data["cliente"] = $cliente->toArray();
        }

        return response()->json($data, 200);
    }

    // informações:
    //	- cliente: cpf, nome, telefone, endereco* OK
    //	- endereco: CEP, rua, bairro, cidade, numero, complemento, referencia OK
    //	- pedido: dia de entrega, horario da entrega e forma de pagamento OK
    //	- produto: lista de produtos com nome e quantidade

    public function edit(Request $request, $id){
        $pedido_select = Pedido::find($id);

        $pedido = $pedido_select;
        $cliente = $pedido_select->cliente()->first();
        $endereco = $cliente->endereco()->first();
        $produtos = $pedido_select->produtos()->get();

        dd($pedido->toArray(), $cliente->toArray(), $endereco->toArray(), $produtos);
        return view('pedidos/inserir');
    }

    public function show(Request $request, $id){
        return view('pedidos/visualizar', Pedido::getDadosVisualizacao($id));
    }
}
