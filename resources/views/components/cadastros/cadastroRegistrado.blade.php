

@extends('main')
@section('title','Cadastrar')
@section('content')

<link rel='stylesheet' href='../css/inicio.css'>
<link rel='stylesheet' href='../css/dropdownMenu.css'>
<link rel='stylesheet' href='../css/cadastro/cadastro.css'>

<div class="row" id='divCadastro'>
    
@foreach ($cadastro as $cadastro)
    <div id="dados-cliente">

        <p> {{$cadastro->idcliente}} - {{$cadastro->nomec}}</p>
        <p>CPF: {{$cadastro->documento}}</p>
        <p>Nascimento: {{$cadastro->nascimento}}</p>
        <p>Email: {{$cadastro->email}}</p>
        <p>Telefone: {{$cadastro->telefone}}</p>

        <hr>
        
        <div id="planoDiv">
        <p>Plano: {{$cadastro->nomep}}</p>
        <p>Fidelidade: {{$cadastro->fidelidade}}</p>
        <p>Download: {{$cadastro->download}}</p>
        <p>Upload: {{$cadastro->upload}}</p>
        <p>Inicio de Vigencia: {{$cadastro->inicio}}</p>
        <p>Fim de Vigencia: {{$cadastro->fim}}</p>
        <p>Valor: {{$cadastro->valor}}</p>
        </div>

    </div>
@endforeach
</div>


@endsection