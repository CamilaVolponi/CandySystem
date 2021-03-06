<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MeusDadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\RelatoriosController;
use \App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'sign_in'])->name('login.sign_in');

Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

Route::middleware(['isUser', 'Proprietario'])->group(function () {
    Route::prefix("dados-empresa")->group(function(){
        Route::get('/', [EmpresaController::class, 'index'])->name('dadosEmpresa.index');
        Route::get('/create', [EmpresaController::class, 'create'])->name('funcionario.create');
        Route::post('/create', [EmpresaController::class, 'store'])->name('funcionario.store');
    });
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('main.index');

    Route::get("/logout", [LoginController::class, 'logout'])->name("login.logout");

    Route::prefix("meus-dados")->group(function(){
        Route::get('/', [MeusDadosController::class, 'index'])->name('meusDados.index');
    });

    Route::prefix("dados-empresa")->group(function(){
        Route::get('/', [EmpresaController::class, 'index'])->name('dadosEmpresa.index');
    });

    Route::prefix("/pedidos")->group(function(){
        Route::get('/', [PedidosController::class, 'index'])->name('pedidos.index');

        Route::get('/create', [PedidosController::class, 'create'])->name('pedidos.create');
        Route::post('/create', [PedidosController::class, 'store'])->name('pedidos.store');
        Route::get('/create/getCliente', [PedidosController::class, 'getCliente'])->name("pedidos.get.cliente");


        Route::get('/edit/{id}', [PedidosController::class, 'edit'])->name('pedidos.edit');
        Route::get('/show/{id}', [PedidosController::class, 'show'])->name('pedidos.show');
    });

    Route::prefix("/produtos")->group(function () {
        Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');
        Route::get('/create', [ProdutosController::class, 'create'])->name('produtos.create');
        Route::get('/show/{id}', [ProdutosController::class, 'show'])->name('produtos.show');
    });

    Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('relatorios.index');
});
