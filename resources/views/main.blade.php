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


   
<body>

</html>