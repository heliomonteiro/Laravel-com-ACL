@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Chamados</h2>

        @can('create',App\Chamagido::class)
        <p><a>Criar Chamado</a></p>
        @endcan

        @forelse($chamados as $key => $value)
            <p>{{$value->titulo}}
            
            @can('view',$value)
                @can('update',$value)
                <a href="/home/{{$value->id}}">Editar</a>
                @endcan
                @can('delete',$value)
                <a href="/home/{{$value->id}}">Delete</a>
                @endcan            
            @endcan
        </p>

        @empty
            <p>Não existe chamados!</p>
        @endforelse
 
    </div>
</div>
@endsection
