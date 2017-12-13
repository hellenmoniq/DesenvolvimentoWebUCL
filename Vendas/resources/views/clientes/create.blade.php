@extends ('layouts.principal')

@section('titulo', 'Criação de um novo cliente')

@section ('conteudo')
    <form action="{{route('clientes.store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        Id: <input type="text" name="id"><br><br>
        Nome: <input type="text" name="nome"><br><br>
        Cnpj: <input type="text" name="cnpj"><br><br>
        
        <button type="submit" name="button">Criar Cliente</button>

    </form>
@endsection

