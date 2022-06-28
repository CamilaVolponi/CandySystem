<?php

namespace App\Http\Middleware;

use App\Enums\TipoCargo;
use Closure;
use Illuminate\Http\Request;

class Proprietario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Só proprietário
        if(auth()->user()->cargo == TipoCargo::PROPRIETARIO){
            return $next($request);
        }
        dd("Você não pode acessar isso!!!");
    }
}
