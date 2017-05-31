@extends('layouts.app') 
@section('conteudo')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Lista de Gêneros</h1>
                                            @if (Auth::guest())
&nbsp;
            @else
                <a href="/generos/create">Cadastrar</a>
                @endif
                <div class="panel panel-primary">
                    <div class="panel-heading">Tabela de dados</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->nome}}</td>
                                     @if (Auth::guest())
&nbsp;
            @else
                                    <td><form style="display: inline;" action="{{route('generos.destroy', $genero->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-danger">Apagar</button></td>
                                </tr>
            @endif
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse 
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection