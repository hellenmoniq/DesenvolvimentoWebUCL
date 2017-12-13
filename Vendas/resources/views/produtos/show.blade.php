@extends ('layouts.principal')

@section('titulo', 'Detalhes do produto')

@section ('conteudo')

            
            Tabela com o FOR
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Preço</th>
                </thead>
                <tbody>
            @for($i=0; $i < count($produto); $i++)
            <tr>
                <td>{{$produto[$i]['id']}}</td>
                <td>{{$produto[$i]['nome']}}</td>
                <td>{{$produto[$i]['preco']}}</td>
            </tr>
            @endfor
                </tbody>
            </table>
            
            
           
              
@endsection

@section('scripts')
@parent

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/pt-br.js"></script>
        
@endsection