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
                <tr>
                    <td>{{$cliente['id']}}</td>
                    <td>{{$cliente['nome']}}</td>
                    <td>{{$cliente['cnpj']}}</td>
                    
                </tr>
            </tbody>
</table>


<br><br>
@endsection