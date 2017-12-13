@extends ('layouts.principal')

@section('titulo', 'Detalhes do produto')

@section ('conteudo')

<table class="table">
                <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
            </thead>
            <tbody>
                @for($i=0; $i < count($cliente); $i++)
                <tr>
                    <td>{{$cliente[$i]['id']}}</td>
                    <td>{{$cliente[$i]['nome']}}</td>
                    <td>{{$cliente[$i]['cnpj']}}</td>
                    
                </tr>
                @endfor
            </tbody>
</table>

<br><br>
@endsection