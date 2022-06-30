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
        $cpf = $request->only("cliente")["cliente"]["cpf"];
        $cliente = Cliente::where("cpf", $cpf)->get()->first();
        $funcionario = auth()->user();

        $data = $request->all();

//        if(1 == 0){
        if($cliente){
            // vericar se informações foram atualizadas
            // cpf é inalterável - já garantido pela busca de cliente
            DB::beginTransaction();
            $dataPedido = $request->only("pedido")["pedido"];
            $dataPedido = array_merge($dataPedido, [
               "cliente_id" => $cliente->id,
               "empresa_id" => $funcionario->getEmpresa()->id,
            ]);

            $produtos = $dataPedido["produtos"];
            $countProduto = 0; // debug
            try{
                $pedido = $cliente->pedidos()->create($dataPedido);
                try{
                    foreach ($produtos as $produto){
                        $countProduto++;
                        if($produto["id"] == null || $produto["preco"] == null){
                            throw new \Exception("Id ou preço nulos", 123);
                        }
                        $pedido->produtos()->attach($produto["id"], [
                            "quantidade" => $produto["quantidade"],
                            "preco" => $produto["preco"],
                        ]);
                    }
                    DB::commit();
                    $data = array_merge($data, [
                        "success" => true
                    ]);
                } catch (\Exception $e){
                    DB::rollBack();
                    $data = array_merge($data, [
                        "success" => false,
                        "error" => $e,
                        "produto" => $produtos[$countProduto],
                        "produtos" => $produtos,
                    ]);
                }
//                catch (QueryException $e){
//                    DB::rollBack();
//                    $data = array_merge($data, [
//                        "success" => false,
//                        "error" => $e,
//                        "pedido" => $produtos[$countProduto]
//                    ]);
//                }
            }catch (QueryException $e){
                DB::rollBack();
                $data = array_merge($data, [
                    "success" => false,
                    "error" => $e,
                    "data_pedido" => $dataPedido
                ]);
            }
//            dd($pedido->produtos()->get());

//            DB::rollBack();
        }else{
            // cadastro novo
            $data = array_merge($data, [
                "success" => false,
            ]);
        }

        $data = array_merge($data, [
            "isNull" => $cliente == null,
            "cpfIsNull" => $cpf == null,
        ]);

        return response()->json($request->all(), 200);
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
