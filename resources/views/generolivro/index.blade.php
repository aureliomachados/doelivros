@extends('app')

@section('title')
    Lista de gêneros
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">

            @if(Session::has("message"))
                <div class="alert alert-{{Session::get("status")}}">{{Session::get("message")}}</div>
            @endif
            <div class="panel panel-default">

                <div class="panel-heading panel-title text-center">Lista de gêneros</div>

                <div class="panel-body">

                    <a href="/generolivro/create">Novo gênero</a>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Gênero</th>
                            <th><i class="glyphicon glyphicon-edit"></i></th>
                            <th><i class="glyphicon glyphicon-remove"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($generos as $genero)
                            <tr>
                            <td>{{$genero->id}}</td>
                            <td><a  href="/generolivro/{{$genero->id}}">{{$genero->genero}}</a></td>
                            <td><a href="/generolivro/{{$genero->id}}/edit"><i class="glyphicon glyphicon-edit"></a></td>
                            <td>
                                <form action="/generolivro/{{$genero->id}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <input type="hidden" name="_token" value="{{Session::token()}}"/>
                                    <input type="hidden" name="id" value="{{$genero->id}}"/>

                                    <button type="submit" class="btn btn-link"><i class="glyphicon glyphicon-remove"></i></button>
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