
<div class='form-group'>
<form method='POST' action="{{ route ('registrar-cadastro')}}">
    @csrf
    
    <div class='col-4'>
        
    <select name='cliente'>
        @foreach ($clientes as $clientes)
        <option value='{{$clientes->id}}'>{{$clientes->nome}}</option>
        @endforeach
    </select>
    <select name='plano'>
        @foreach ($planos as $planos)
        <option value='{{$planos->id}}'>{{$planos->nome}}</option>
        @endforeach
    </select>
    <label for='inicio' id='inicioFidelidade'>Inicio da Fidelidade
        <input type='date' name='inicio' required>
    </label>
        <input type="submit" value='Cadastrar'>
    </div>
</form>
</div>