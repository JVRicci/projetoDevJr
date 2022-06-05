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
                            <th scope="col">Download</th>
                            <th scope="col">Upload</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Fim</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($planos as $planos)
                        <tr>           
                            <td scope="row"></td>       
                            <td scope="row">{{$planos->id}}</td>
                            <td scope="row">{{$planos->nome}}</td>
                            <td scope="row">{{$planos->download}}</td>
                            <td scope="row">{{$planos->upload}}</td>
                            <td scope="row">{{$planos->inicio}}</td>
                            <td scope="row">{{$planos->fim}}</td>
                            <td scope="row">{{$planos->valor}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
</div>