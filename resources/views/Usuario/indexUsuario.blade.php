@extends('templates.templateUsuario')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center">Lista de Usuarios</h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Descricao</th>
        </tr>
        </thead>
        <tbody>
        @if ($generos)
            @foreach($generos as $genero)
            <tr>
            <th scope="row">{{ $genero->ID }}</th>
            <td>{{ $genero->Descricao }}</td>
            <td><a href="{{ route('genero.edit', ['genero'=> $genero->ID]) }}" class="btn btn-primary">Atualizar Genero</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection