<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function sign_in(Request $request){
        $request->validate([
            'cpf' => array(
                'required',
                'regex:/([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{3}[0-9]{3}[0-9]{3}[0-9]{2})/'
            ),
        ]);
        dd($request->input());
    }
}
