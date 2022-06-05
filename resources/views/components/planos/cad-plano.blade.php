@extends('main')
@section('title','Cadastrar')
@section('content')


<div>
<form method='POST' action="{{ route ('registrar-plano')}}">
    @csrf
    
    <div class='col-4'>
        <input type='text' class='form-control' placeholder='nome' name='nome' required>

        <input type='number' class='form-control' placeholder='Download' name='download' required>
        <input type='number' class='form-control' placeholder='upload' name='upload' required>

        <input type="date" class='form-control' placeholder='Inicio de vigencia' name='inicio' required>
        <input type="date" class='form-control' placeholder='Fim de vigencia' name='fim' required>

        <input type='text' class='form-control' placeholder='valor' name='valor' required>

        <input type="submit" value='Cadastrar'>
    </div>
</form>
</div>

@endsection