@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <h1 class="page-header">Edição de Filme</h1>
        <div class="col-md-6">
            <form action="{{ route('filmes.update', $filme->id) }}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input id="titulo" class="form-control" type="text" name="titulo" value="{{$filme->titulo}}">
                </div>
                <div class="form-group">
                    <label for="ano">Ano nascimento</label>
                    <input id="ano" class="form-control" type="text" name="ano" value="{{$filme->ano}}">
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input id="genero" class="form-control" type="text" name="genero" value="{{$filme->genero_id}}">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                @endsection