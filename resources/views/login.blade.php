<html></html>
<head>
   <meta http-equiv='Content-Type' content='text/html'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <Title>Login</title>
   <link rel='stylesheet'
   href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
   integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
   crossorigin='anonymous'/>

   <link rel='stylesheet' href='css/login.css'>
</head>

<body>
    <div class='col-4' id='loginDiv'>
        <h4>Login</h4>
        <form action="/inicio" method='POST'>
        @csrf
        <input type='text' name='login' placeholder='Login' class='form-control' id='loginTxt' required>
        <input type='password' name='senha' placeholder='Senha' class='form-control' id='senhaTxt' required>
        <input type='submit' name='confirma' value='Login' class='btn btn-primary'>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#registrar">
            Cadastrar
        </button>

        </form>
    </div>

    <div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="registrarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrarModalLabel">Cadastro de Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{route ('registrar-user')}}" method='POST'>
            @csrf
            <div class="modal-body">
                <input type='text' name='loginReg' class='form-control' placeholder='nome' required><br>
                <input type='password' name='senhaReg' class='form-control' placeholder='Senha' required>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input type="submit" name='cadastrar' value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<body>

</html>