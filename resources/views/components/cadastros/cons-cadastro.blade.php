@extends('main')
@section('title','Cadastrar')
@section('content')

<div class="row">
        <div class="col-4">
            <div id="doador-div">

                <table id="doador-table" class="table table-dark">
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
                        @foreach ($cadastros as $clientes)
                        <tr>           
                            <td scope="row"></td>       
                            <td scope="row">{{$clientes->id}}</td>
                            <td scope="row"><a href="/cadastro?id={{$clientes->id}}">{{$clientes->nomec}}</a></td>
                            <td scope="row">{{$clientes->nomep}}</td>
                            <td scope="row">{{$clientes->valor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

@endsection