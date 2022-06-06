@extends('main')
@section('title','Cadastrar')
@section('content')

<link rel="stylesheet" href="css/cadastro/cons-cadastro.css">

<div class="row">
        <div class="col-4">
            <div id="divCorpo">

                <table id="cadastro-table" class="table table-dark">
                    <thead >
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Plano</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cadastros as $cadastros)
                        <tr>           
                            <td scope="row"></td>       
                            <td scope="row">{{$cadastros->id}}</td>
                            <td scope="row"><a href="/cadastro/id={{$cadastros->id}}">{{$cadastros->nomec}}</a></td>
                            <td scope="row">{{$cadastros->nomep}}</td>
                            <td scope="row">{{$cadastros->valor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

@endsection