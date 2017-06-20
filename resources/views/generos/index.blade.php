@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col l12">
            <h1 class="page-header center-align">Listas de Generos</h1>
            @if (Auth::guest())
            &nbsp;
            @else
            <div class="row">
                <div class="center-align">
                    <a class="waves-effect waves-light btn-large" href="/generos/create">Cadastrar Novo Genero</a>
                </div>
            </div>
            @endif
            <div class="collection">
                <a href="" class="collection-item active center-align"></a>
                <div class="panel-body">
                    <table class="table responsive-table">
                        <thead>
                            <tr>
                                <th class="center-align">Nome</th>
                                <th class="center-align">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($generos as $genero)
                            <tr>
                                <td class="center-align">{{$genero->nome}}</td>
                                <td class="center-align">
                                    @if (Auth::guest())
                                    &nbsp;
                                    @else
                                    <form style="display: inline;" action="{{route('generos.destroy', $genero->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn waves-effect red">Apagar</button></td>
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