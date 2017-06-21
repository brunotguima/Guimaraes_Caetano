@extends('layouts.app') 
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-header">
                Editar Lista de Reprodução
            </h1>
            <form method="post" action="{{ route('listareps.update', '$listareps->id') }}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                <div class="row">
                    <div class="form-group">
                        <label for="nome">Nome</label>
<<<<<<< HEAD
                        <input class="form-control" type="text" name="nome" id="nome" value="{{'$listareps->nome'}}">
=======
                        <input class="form-control" type="text" name="nome" id="nome" value="{{('$listareps->nome')}}">
>>>>>>> origin/master
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="descricao">Descricao</label>
<<<<<<< HEAD
                        <input class="form-control" type="text" name="descricao" id="descricao" value="{{'$listareps->descricao'}}">
=======
                        <input class="form-control" type="text" name="descricao" id="descricao" value="{{('$listareps->descricao')}}">
>>>>>>> origin/master
                    </div>
                </div>
                <div class="row">
                    <label for="filmes2">Filmes</label>
                    <div class="input-field">
                        <select class="form-control select2-multi" name="filmes2[]" multiple="multiple">
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
<<<<<<< HEAD
            $('.select2-multi').select2().val({!! json_encode($listarep->filme()->allRelatedIds())!!}).trigger('change');
=======
        $('.select2-multi').select2().val({!! json_encode($listareps->filme()->getRelatedIds())
    !!}).trigger('change');
>>>>>>> origin/master
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>