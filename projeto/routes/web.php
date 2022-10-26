<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("usuario/{id}",function($id){
    return "Você está na página usuário, o valor passado é {$id}";
});

Route::get("cliente", function(){
    $resultado = [
        "nome"=>"Astrobaldo Crisostomo",
        "endereco"=>"Rua das Mangabeiras 89",
        "CPF"=>"845.789.565-15"
    ];

    dd($resultado);
});

Route::get("teste", function(Request $requisicao){
    $resposta = $requisicao->ip();
    dd($resposta);

});

Route::get("funcionario",[App\Http\Controllers\FuncionarioController::class, "mostrarDados"]);

Route::get("funcionarios", [App\Http\Controllers\FuncionarioController::class, "infoFuncionarios"]);

Route::get("funcionarioView", function(){
    return view ("funcionario");
});