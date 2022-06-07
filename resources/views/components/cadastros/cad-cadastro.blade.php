@extends('main')
@section('title','Consulta')
@section('content')

<link rel="stylesheet" href="css/cadastro/cad-cadastro.css">

<div class='form-group' >
<form method='POST' action="{{ route ('registrar-cadastro')}}">
    @csrf
    
    <div class='col-4' id='divForm'>
        
    <select name='cliente' class='form-control'>
        @foreach ($clientes as $clientes)
        <option value='{{$clientes->id}}'>{{$clientes->nome}}</option>
        @endforeach
    </select>
    <select name='plano' class='form-control'>
        @foreach ($planos as $planos)
        <option value='{{$planos->id}}'>{{$planos->nome}}</option>
        @endforeach
    </select>
    <label for='inicio' id='inicioFidelidade'>Inicio da Fidelidade
        <input type='date' name='inicio' class='form-control' max='{{date( "d/m/Y", strtotime( "now"))}}' required>
    </label>
        <input type="submit" value='Cadastrar' class='btn btn-secondary'>
    </div>
</form>
</div>

@endsection