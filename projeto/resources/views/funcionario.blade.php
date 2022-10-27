<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Funcionário</title>
</head>
<body>
    <h1>Página Funcionário</h1>
    {{date("d/m/Y")}}
    <hr>
    <p>Olá {{ $nome }} seu salário é {{ $salario }} </p>

    @php
        $endereco = "Rua das Goiabas 23";
        $frutas = ["Pitaya", "Maracujá", "Kiwi", "Morango", "Abacaxi"];


    @endphp

        {{-- Isso é um comentário usando sintaxe Blade --}}

        @if ($salario >=1000)
            <p>Você recebrá um bônus de {{ $salario *0.2 }} </p>
        @else
            <p>Infelizmente você não poderá receber o bônus</p>
        @endif

            <ul>
        @foreach ($frutas as $item)
             <li> {{ $item }} </li>
            
        @endforeach
    </ul>

</body>

</html>