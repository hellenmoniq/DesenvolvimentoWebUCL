@extends ('layouts.principal')

@section('titulo', 'Criação de um novo produto')

@section ('conteudo')
    <form action="{{route('produtos.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        Id: <input type="text" name="id"><br><br>
        Nome: <input type="text" name="nome"><br><br>
        Preço: <input type="text" name="preco"><br><br>
        <input type="submit">

    </form>
@endsection




        
    