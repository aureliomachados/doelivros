@extends('app')

@section('title')
    Atualizando gênero | DoeLivros
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/generolivro/{{$genero->id}}" class="form-inline" method="post">
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <input type="hidden" name="_method" value="PUT"/>
                <input type="hidden" name="id" value="{{$genero->id}}"/>

                <div class="form-group">
                    <label for="genero" class="control-label">Gênero</label>
                    <input type="text" name="genero" id="genero" value="{{$genero->genero}}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Atualizar Gênero" class="btn btn-primary"/>
                </div>
                @if($errors->has('genero')) <div class="has-error"><span class="help-block">{{$errors->first("genero")}}</span></div> @endif

            </form>
        </div>
    </div>
@endsection