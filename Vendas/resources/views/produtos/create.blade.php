<html>
    <head>
        <title>Produtos - Criar</title>
    </head>
    <body>
        <form action="{{route('produtos.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            Nome: <input type="text" name="nome"><br>
            <input type="submit">
        
        </form>
        
    </body>
    
</html>
