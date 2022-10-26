<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function mostrarDados(){
        return "Estou na classe FuncionarioController";
    }

    public function infoFuncionarios(){
    
        $infoFuncionario = [
            "nome" => "Camilo Mendes",
            "idade" => 40,
            "salario" => "4578.50"
       ];
       dd($infoFuncionario);
    }
}
