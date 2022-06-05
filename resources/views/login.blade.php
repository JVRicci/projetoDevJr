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
    <input type='button' name='cadastrar' value='Cadastrar' class='btn btn-secondary'>

    </form>
    </div>
<body>

</html>