@extends ('layouts.principal')

@section('titulo', 'Detalhes dos Representantes')

@section ('conteudo')

        <form action="{{route('representantes.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            Nome: <input type="text" name="nome"><br>
            Empresa: <input type="text" name="empresa"><br>
            Data Nascimento: <input type="date" name="datnasc"><br> 
            Telefone Contato: <input type="tel" name="telefone"><br>
              
            <input type="submit">
        
        </form>
        
    @endsection