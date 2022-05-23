<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function index(Request $request){
        return view('meus_dados');
    }
}
