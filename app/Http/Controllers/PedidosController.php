<?php

namespace App\Http\Controllers;

use App\Enums\TipoFormaDePagamento;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $formasPagamento = TipoFormaDePagamento::cases();
        return view('pedidos/inserir', compact('produtos','formasPagamento'));
    }
    public function store(Request $request){
        $dadosRequest = $request->all();
        $dadosCliente = json_decode($dadosRequest["cliente"], true);
        $dadosPedido = json_decode($dadosRequest["pedido"], true);

        $data = [
            "sucess" => false
        ];

        $cpf = $dadosCliente["cpf"];
        $cliente = Cliente::where("cpf", $cpf)->get()->first();
        $funcionario = auth()->user();

        cadastrar_pedido:
        if($cliente){
            // vericar se informações foram atualizadas
            // cpf é inalterável - já garantido pela busca de cliente
            DB::beginTransaction();
            $dadosPedido = array_merge($dadosPedido, [
                "cliente_id" => $cliente->id,
                "empresa_id" => $funcionario->getEmpresa()->id,
            ]);

            $produtos = $dadosPedido["produtos"];
            try{
                $pedido = $cliente->pedidos()->create($dadosPedido);
                try{
                    foreach ($produtos as $produto){
                        $pedido->produtos()->attach($produto["id"], [
                            "quantidade" => $produto["quantidade"],
                            "preco" => $produto["preco"],
                        ]);
                    }
                    DB::commit();
                    $data = array_merge($data, [
                        "success" => true
                    ]);
                    // cadastro de pedido concluído
                }catch (QueryException $e){
                    DB::rollBack();
                    $data = array_merge($data, [
                        "success" => false,
                        "error" => $e,
                    ]);
                    // erro ao adicionar produto
                }
            }catch (QueryException $e){
                DB::rollBack();
                $data = array_merge($data, [
                    "success" => false,
                    "error" => $e,
                    "data_pedido" => $dadosPedido
                ]);
                // erro em cadastrar pedido
            }
        }else{
            // cadastro novo
            $cliente = Cliente::create($dadosCliente);
            $cliente->endereco()->create($dadosCliente["endereco"]);
            goto cadastrar_pedido;
        }

        if($data["success"]){
            return redirect('/')->with(["msg" => "pedido cadastrado com sucesso"]);
        }else{
            return redirect("pedidos/create")->with([
                "error" => $data["error"],
                "cliente" => $dadosCliente,
                "pedido" => $dadosPedido,
                "produtos" => Produto::all()
            ]);
        }
    }
    public function getCliente(Request $request){
        $cpf = $request->only("cpf");
        $cliente = Cliente::where("cpf", $cpf)->get()->first();

        $data = [ "existe" => $cliente != null ];

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
