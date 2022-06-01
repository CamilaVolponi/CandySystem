<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MeusDadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ReceitasController;
use App\Http\Controllers\RelatoriosController;
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

Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'sign_in'])->name('login.sign_in');

Route::get('/cadastro', [CadastroController::class, 'index'])->name('cadastro.index');

Route::prefix("/admin")->group(function (){
    Route::get("/add-colaborador", function (){
        echo "<h1>Adicionar Colaborador<h1>";
    })->name("admin.add-colaborator");
});

Route::prefix("meus-dados")->group(function(){
    Route::get('/', [MeusDadosController::class, 'index'])->name('meus-dados.index');
    Route::get('/endereco', [MeusDadosController::class, 'endereco'])->name('meus-dados.endereco');
});

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');


Route::prefix("receitas")->group(function () {
    Route::get('/', [ReceitasController::class, 'index'])->name('receitas.index');
    Route::get('/{produto}/create/passo', [ReceitasController::class, 'store'])->name('receitas.create');
    Route::get('/{produto}/create/ingrediente', [ReceitasController::class, 'store'])->name('receitas.create');
});


Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('relatorios.index');
