<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        $empresa_id = auth()->user()->getEmpresa()->id;
        $pedidos = Pedido::where("empresa_id", $empresa_id)->get();
        return view('main',compact('pedidos'));
    }
}
