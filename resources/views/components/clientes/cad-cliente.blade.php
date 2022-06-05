@extends('main')
@section('title','Cadastrar')
@section('content')

<div class='form-group'>
<form method='POST' action="{{ route ('registrar-cliente')}}">
    @csrf
    
    <div class='col-4'>
        <input type='text' class='form-control' placeholder='nome' name='nome' required>

        <input type='text' class='form-control' placeholder='CPF/CNPJ' name='documento' required>

        <input type="email" class='form-control' placeholder='Email' name='email' required>

        <input type='text' class='form-control' placeholder='telefone' name='telefone' required>

        <input type='date' class='form-control' placeholder = 'Nascimento' name='nascimento' required>

        <input type="submit" value='Cadastrar'>
    </div>
</form>
</div>

@endsection