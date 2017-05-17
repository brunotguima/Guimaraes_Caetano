@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Filmes</div>

                <div class="panel-body">
 <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="page-header">
                        Listas de Reprodução
                    </h1>

                    <ul>
                        @foreach($filmes as $filme)
                            <li>{{$filme->id}} - {{$filme->titulo}} , {{$filme->ano}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
