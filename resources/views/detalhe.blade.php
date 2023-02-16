@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Detalhe de Chamado</h2>

        <p>Título : {{$chamado->titulo}}</p>
        <p>Descrição : {{$chamado->descricao}}</p>

    </div>
</div>
@endsection
