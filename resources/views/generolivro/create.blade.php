@extends('app')

@section('title')
    Novo gênero | DoeLivros
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/generolivro" class="form-inline" method="post">
                <input type="hidden" name="_token" value="{{Session::token()}}">

                <div class="form-group @if($errors->has('genero')) has-error @endif">
                    <label for="genero" class="control-label">Gênero</label>
                    <input type="text" name="genero" id="genero" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Cadastrar Gênero" class="btn btn-primary"/>
                </div>
                @if($errors->has('genero')) <div class="has-error"><span class="help-block">{{$errors->first('genero')}}</span></div> @endif
            </form>
        </div>
    </div>
@endsection