@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">Listas de Reprodução</h1>
            @if (Auth::guest())
            &nbsp;
            @else
            <a href="/listareps/create">Cadastrar</a>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">Listas cadastradas</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Filmes</th>
                                <th>Criado por</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($listareps as $listarep)
                            <tr>
                                <td>{{$listarep->nome}}</td>
                                <td>{{$listarep->descricao}}</td>
                                <td>{{$listarep->filmes}}</td>
                                <td>{{$listarep->creator}}
                                    @if (Auth::guest())
                                    &nbsp;
                                    @else
                                    <a class="btn btn-primary" href="/listareps/{{$listarep->id}}/edit">
                                        Editar
                                    </a>

                                    <form style="display: inline;" action="{{route('listareps.destroy', $listarep->id)}}" method="post">
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