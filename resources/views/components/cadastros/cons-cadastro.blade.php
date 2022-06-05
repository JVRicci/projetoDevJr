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
                            <th scope="col">Plano</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $clientes)
                        @foreach ($planos as $planos)
                        <tr>           
                            <td scope="row"></td>       
                            <td scope="row">{{$clientes->id}}</td>
                            <td scope="row">{{$clientes->nome}}</td>
                            <td scope="row">{{$planos->nome}}</td>
                            <td scope="row">{{$planos->valor}}</td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
</div>