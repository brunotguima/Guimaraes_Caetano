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
                                    <th>Id</th>
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($generos as $genero)
                                <tr>
                                    <td>{{$genero->id}}</td>
                                    <td>{{$genero->nome}}</td>
                                </tr>
                             @empty
                                <tr><td>Sem resultados</td></tr>
                             @endforelse 
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection