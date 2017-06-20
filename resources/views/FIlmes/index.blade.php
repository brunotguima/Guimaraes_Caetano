@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col l12">
            <h1 class="page-header center-align">Lista de Filmes Cadastrados</h1>
            @if (Auth::guest())
            &nbsp;
            @else
            <div class="row">
                <div class="center-align">
                    <a class="waves-effect waves-light btn-large" href="/filmes/create">Cadastrar Novo Filme</a>
                </div>
            </div>
            @endif
            <div class="collection">
                <a href="" class="collection-item active center-align"></a>
                <div class="panel-body">
                    <table class="table responsive-table">
                        <thead>
                            <tr>
                            <th class="center-align">Titulo</th>
                            <th class="center-align">Ano</th>
                            <th class="center-align">Genero</th>
                            <th class="center-align"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($filmes as $filme)
                        <tr>
                            <td class="center-align">{{$filme->titulo}}</td>
                            <td class="center-align">{{$filme->ano}}</td>
                            <td class="center-align">{{$filme->genero->nome}}</td>
                            <td class="center-align">
                                @if (Auth::guest())
                                &nbsp;
                                @else
                                <a class="waves-effect waves-light btn" href="/filmes/{{$filme->id}}/edit">
                                    Editar
                                </a>
                                <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn waves-effect red">Apagar</button>
                                </form>
                                                        </tr>

                                    @endif
                                    @empty
                                    <tr><td>Sem resultados</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection