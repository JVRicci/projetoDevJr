@extends('main')
@section('title','Cadastrar')
@section('content')

<link rel="stylesheet" href="css/plano/cad-plano.css">

<div >
<form method='POST' action="{{ route ('registrar-plano')}}">
    @csrf
    
    <div class='col-4' id='divForm'>
        <input type='text' class='form-control' placeholder='nome' name='nome' required>

        <input type='number' class='form-control' placeholder='Download' name='download' required>
        <input type='number' class='form-control' placeholder='Upload' name='upload' required>

        
        <label for='inicio'>Inicio da Vigencia</label>
        <input type="date" class='form-control' placeholder='Inicio de vigencia' name='inicio' required>
        
        <label for='fim'>Fim da Vigencia</label>
        <input type="date" class='form-control' placeholder='Fim de vigencia' name='fim' required>

        <input type='text' class='form-control' placeholder='Valor' name='valor' required>

        <input type="submit" value='Cadastrar' class='btn btn-secondary'>
    </div>
</form>
</div>

@endsection