@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col l12">
            <h3 class="page-header center-align">Lista de Reprodução Selecionada:</h3>
            <h1 class="page-header center-align">{{$listarep->nome}}</h1>
            <div class="row">
            <div class="col l12 center-align">
            @if (Auth::guest())
                                    &nbsp;
                                    @else
                                    <a class="waves-effect waves-light btn" href="/listareps/{{$listarep->id}}/edit">
                                        Editar esta Lista
                                    </a>
                                    <form style="display: inline;" action="{{route('listareps.destroy', $listarep->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn waves-effect red">Apagar esta Lista</button></td>
                            </tr>
                            @endif
                            </div>
                            </div>
            <div class="collection">
                <a href="" class="collection-item active center-align"></a>
                <div class="panel-body">
                    <table class="table centered">
                        <thead>
                            <tr>
                                <th class="center-align">Descrição</th>
                                <th class="center-align">Criado por</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center-align">{{$listarep->descricao}}</td>
                                <td class="center-align">{{$listarep->creator}}</td>
                        </tbody>
                        </div>
                        <div class="row">&nbsp;</div>
                        <table class="table">
                        <thead>
                            <tr>
                                <th>Filmes Cadastrados na Lista</th>
                                <th>Ano</th>
                                <th>Gênero</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listarep->filme as $filmes)
                                                        <tr>
                                <td>{{$filmes->titulo}}</td>
                                <td>{{$filmes->ano}}</td>
                                <td>{{$filmes->genero->nome}}</td>
                                                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endsection