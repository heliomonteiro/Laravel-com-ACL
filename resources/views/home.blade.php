@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Chamados</h2>

        @forelse($chamados as $key => $value)
            <p>{{$value->titulo}}
          @can('ver-chamado',$value)
          <a href="/home/{{$value->id}}">Editar</a>
        @endcan
        </p>

        @empty
            <p>Não existe chamados!</p>
        @endforelse
 
    </div>
</div>
@endsection
