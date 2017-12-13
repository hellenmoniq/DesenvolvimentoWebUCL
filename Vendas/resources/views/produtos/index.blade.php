@extends ('layouts.principal')

@section('titulo', 'Produto')

@section('estilos')
        <link href="css/estilo-principal.css" rel="stylesheet">
@endsection

@section ('conteudo')
        <a href= "{{route('produtos.create')}}">Criar Produto</a>
        
        <br><br>
        
        <table class="table">
      <thead>
        <th>ID</th>
        <th>Produto</th>
      </thead>
      <tbody>
        @foreach($produtos as $produto)
          <tr>
            <td>{{$produto['id']}}</td>
            <td>{{$produto['nome']}}</td>
            <td><a href="{{route('produtos.show',['id' => $produto['id']])}}">Detalhes</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>

       
        
@endsection
