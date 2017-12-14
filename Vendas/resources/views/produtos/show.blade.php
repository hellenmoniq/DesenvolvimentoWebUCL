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
            
            <tr>
                <td>{{$produto['id']}}</td>
                <td>{{$produto['nome']}}</td>
                <td>{{$produto['preco']}}</td>
            </tr>
            
                </tbody>
            </table>
            
            
           
              
@endsection

@section('scripts')
@parent

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/pt-br.js"></script>
        
@endsection