@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Filmes Cadastrados &nbsp;
                    @if (Auth::guest())
                    &nbsp;
                    @else
                    <a href="/filmes/create">Inserir filmes</a></div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Ano</th>
                            <th>Genero</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($filmes as $filme)
                        <tr>
                            <td>{{$filme->titulo}}</td>
                            <td></td>
                            <td>{{$filme->genero->nome}}</td>
                            <td>
                                @if (Auth::guest())
                                &nbsp;
                                @else
                                <a class="btn btn-primary" href="/filmes/{{$filme->id}}/edit">
                                    Editar
                                </a>

                                <form style="display: inline;" action="{{route('filmes.destroy', $filme->id)}}" method="post">

                                    {{csrf_field()}}

                                    <input type="hidden" name="_method" value="delete">

                                    <button class="btn btn-danger">Apagar</button>
                                    @endif
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection