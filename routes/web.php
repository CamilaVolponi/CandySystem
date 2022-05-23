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

Route::get('/meus_dados', [MeusDadosController::class, 'index'])->name('meus_dados.index');

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');

Route::get('/receitas', [ReceitasController::class, 'index'])->name('receitas.index');

Route::get('/relatorios', [RelatoriosController::class, 'index'])->name('relatorios.index');