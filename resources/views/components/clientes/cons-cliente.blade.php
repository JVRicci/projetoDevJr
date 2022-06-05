<div>
<div class="row">
        <div class="col-4">
            <div id="doador-div">

                <table id="doador-table" class="table table-dark">
                    <thead >
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Documento</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Nascimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $clientes)
                        <tr>           
                            <td scope="row"></td>       
                            <td scope="row">{{$clientes->id}}</td>
                            <td scope="row">{{$clientes->nome}}</td>
                            <td scope="row">{{$clientes->documento}}</td>
                            <td scope="row">{{$clientes->email}}</td>
                            <td scope="row">{{$clientes->telefone}}</td>
                            <td scope="row">{{$clientes->nascimento}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
</div>