@extends('templates.template')

@section('header')  
    <link rel="stylesheet" title="FilmesTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center"> Lista de Filmes </h2>
        <table class="table table-dark table-bordered">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo </th>
        <th scope="col">Diretor</th>
        <th scope="col">Ano_Produção</th>
        </tr>
        </thead>
        <tbody>
        @if ($filmes)
            @foreach($filmes as $filme)
            <tr >
            <th scope="row">{{ $filme->ID }}</th>
            <td>{{ $filme->Titulo }}</td>
            <td>{{ $filme->Diretor }} </td>
            <td>{{ $filme->Ano_Produção }}</td>
            <td><a href="{{ route('filme.edit', ['filme'=>$filme->ID]) }}" class="btn btn-primary"></a></td>
            </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection