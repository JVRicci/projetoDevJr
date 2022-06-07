@extends('main')
@section('title','Cadastrar')
@section('content')

<link rel="stylesheet" href="css/cliente/cad-cliente.css">

<div class='form-group'>
<form method='POST' action="{{ route ('registrar-cliente')}}">
    @csrf
    
    <div class='col-4' id='divForm'>
        <input type='text' class='form-control' placeholder='Nome' name='nome' required>

        <input type='text' class='form-control' placeholder='CPF' id='cpfTxt'  name='documento'  required>

        <input type="email" class='form-control' placeholder='Email' name='email' required>

        <input type='text' class='form-control' placeholder='Telefone' id='celularTxt' name='telefone' required>
        <label for='nascimento'>Data de Nascimento</label>
        <input type='date' class='form-control' placeholder = 'Nascimento' name='nascimento' required>

        <input type="submit" value='Cadastrar' class='btn btn-secondary'>
    </div>
</form>
</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.mask.min.js"></script> 
<script type="text/javascript" src="js/masks.js"></script>  

@endsection