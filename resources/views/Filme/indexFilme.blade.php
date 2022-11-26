@extends('templates.templateFilme')
@section('header')  
    <link rel="stylesheet" title="FilmesTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center"> Lista de Filmes </h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo </th>
        <th scope="col">Diretor</th>
        <th scope="col">Ano_Produção</th>
        <th scope="col">ID Estudio</th>

        </tr>
        </thead>
        <tbody>
        @if ($filmes)
            @foreach($filmes as $filme)
            <tr >
            <th scope="row">{{ $filme->ID }}</th>
            <td>{{ $filme->Titulo }}</td>
            <td>{{ $filme->Diretor }} </td>
            <td>{{ $filme->Ano_Producao }}</td>
            <td>{{ $filme->Estudio_ID }}</td>
            <td><a href="{{ route('filme.edit', ['filme'=>$filme->ID]) }}" class="btn btn-primary">Atualizar Filme</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection