@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header">
                Cadastrar nova Lista de Reprodução
            </h1>


            <form method="post" action="{{ route('listareps.store') }}">
                {{csrf_field()}}
                <div class="row">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome" value="">
                </div>
                </div>
                <div class="row">
                <div class="form-group">
                    <label for="descricao">Descricao</label>
                    <input class="form-control" type="text" name="descricao" id="descricao" value="">
                </div>
                </div>
                <div class="row">
                <label for="filmes">Filmes</label>
                <div class="input-field">
                    <select class="form-control select2-multi" name="filmes[]" id="filmes[]" multiple="multiple">
                        @foreach($filmes as $filme)
                        <option value='{{$filme->id}}'>{{$filme->titulo}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div>
                    <input type="hidden" name="creator" id="creator" value="{{Auth::user()->name}}">
                </div>
                <div class="row">
                <button class="btn btn-success" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    $('.select2-multi').select2();
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>