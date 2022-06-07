<html>
<head>
   <meta http-equiv='Content-Type' content='text/html'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <Title> @yield('title')</title>
   <link rel='stylesheet'
   href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css'
   integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'
   crossorigin='anonymous'/>

   <link rel='stylesheet' href='css/inicio.css'>
   <link rel='stylesheet' href='css/dropdownMenu.css'>
</head>

<body>

   <header>
                          
        <div class="dropdown">
        Cliente
        <div class="dropdown-content">
            <a href="/cad-cliente">Cadastrar</a>  
            <a href="/cons-cliente">Consulta</a> 
        </div></div>

        
        <div class="dropdown">
            Plano
        <div class="dropdown-content">
            <a href="/cad-plano">Cadastrar</a>  
            <a href="/cons-plano">Consultar</a>  
            
        </div></div>
        

        <div class="dropdown">
            Cadastro
        <div class="dropdown-content">
            <a href="/cad-cadastro">Cadastrar</a>  
            <a href="/cons-cadastro">Consultar</a>  
            
        </div></div>

   </header>
   
   @yield('content')

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
   
<body>

</html>