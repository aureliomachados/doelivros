@extends('app')

@section('title')
    {{$genero->genero}} | DoeLivros
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <td>{{$genero->id}}</td>
                </tr>
                <tr>
                    <th>Gênero</th>
                    <td>{{$genero->genero}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection