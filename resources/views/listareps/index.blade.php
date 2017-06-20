@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col l12">
            <h1 class="page-header center-align">Listas de Reprodução</h1>
            @if (Auth::guest())
            &nbsp;
            @else
            <div class="row">
            <div class="center-align">
                <a class="waves-effect waves-light btn-large" href="/listareps/create">Cadastrar Nova Lista</a>
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
                                <th class="center-align">Descrição</th>
                                <th class="center-align">Criado por</th>
                                <th class="center-align">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($listareps as $listarep)
                            <tr>
                                <td class="center-align">{{$listarep->nome}}</td>
                                <td class="center-align">{{$listarep->descricao}}</td>
                                <td class="center-align">{{$listarep->creator}}</td>
                                <td class="center-align">
                                        <a class="waves-effect  blue darken-1 btn" href="{{route('listareps.show', $listarep->id)}}">
                                        Visualizar
                                    </a>
                                    @if (Auth::guest())
                                    &nbsp;
                                    @else
                                    <a class="waves-effect waves-light btn" href="/listareps/{{$listarep->id}}/edit">
                                        Editar
                                    </a>
                                    <form style="display: inline;" action="{{route('listareps.destroy', $listarep->id)}}" method="post">
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