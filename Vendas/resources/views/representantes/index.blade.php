@extends ('layouts.principal')

@section('titulo', 'Detalhes dos Representantes')

@section ('conteudo')
        <a href= "{{route('representantes.create')}}">Criar Representante</a>
        
    @endsection