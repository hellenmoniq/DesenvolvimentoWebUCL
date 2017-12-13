<html>
    <head>
        <title>Distribuidora XYZ - @yield('titulo', 'Página Inicial') </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
            body{
                background: #DDDDDD;
                color: blue;
            }
            
            .sidebar{
                position: fixed;
                right: 20px;
                top: 20px;
                border: 1px solid #0066CC;
                background: #FFCCCC;
            }
            
        </style>
        
        @section('estilos')
        <link href="css/estilo-principal.css" rel="stylesheet">
        @show
    </head>
    <body>
        
       
       <ul class="nav justify-content-center">
           <li class="nav-item">
              <a class="nav-link active" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('produtos.index')}}">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('representantes.index')}}">Representantes</a>
            </li>
      </ul>
        
        @yield ('conteudo')
       
        @section('scripts')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        @show
       
    </body>
</html>


