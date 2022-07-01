<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', ['errors' => false]);
    }

    public function sign_in(Request $request){
        $credentials = $request->only('cpf', 'senha');
        $credentials['password'] = $credentials['senha'];
        unset($credentials['senha']);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        return view('login', ['errors' => true, 'cpf' => $request->cpf]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
