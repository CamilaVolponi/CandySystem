<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Log;

class LoginController extends Controller
{
    public function index(){
        return view('login', ['errors' => false]);
    }

    /*
    public function sign_in(Request $request){
        $request->validate([
            'cpf' => array(
                'required',
                'regex:/([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{3}[0-9]{3}[0-9]{3}[0-9]{2})/'
            ),
        ]);
        dd($request->input());
    }
    */

    public function sign_in(Request $request){
        //$request->merge(['cpf'=> preg_replace('/[^0-9]/is', '', $request->cpf)]);
        $credentials = $request->only('cpf', 'senha');

        $credentials['password'] = $credentials['senha'];

//        unset($credentials['senha']);

//        Log::info($credentials);


        if (Auth::attempt([
            "cpf" => $credentials["cpf"],
            "password" => $credentials["senha"]
        ])) {
            return redirect('/');
        }

        return view('login', ['errors' => true, 'cpf' => $request->cpf]);
    }
}
