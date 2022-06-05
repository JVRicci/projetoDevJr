@extends('main')
@section('title','Cadastrar')
@section('content')

<div class="container">


@foreach ($cadastro as $clientes)
    <div class="row">
    <div id="dados-cadastro">

        <h6> ID - Nome</h6>
        <p>Documento: </p>

        <hr>
        
        <div id="conDiv">
        <p>Email</p>
        <p>Telefone</p>
        <p>Nascimento</p>
        </div>

        <hr>
    </div>
@endforeach

    </div>
</div>

@endsection