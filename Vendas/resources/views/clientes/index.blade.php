@extends ('layouts.principal')

@section('titulo', 'Lista de Cliente')

@section ('conteudo')


<a href= "{{route('clientes.create')}}">Criar Cliente</a><br><br>

    <table class="table">
      <thead>
        <th>ID</th>
        <th>Nome Cliente</th>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
          <tr>
            <td>{{$cliente['id']}}</td>
            <td>{{$cliente['nome']}}</td>
            <td><a href="{{route('clientes.show',['id' => $cliente['id']])}}">Detalhes</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>

 @endsection