@extends('templates.templateElenco')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center"> Lista de Elencos</h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID Filme</th>
        <th scope="col">ID Ator</th>
        <th scope="col">Papel</th>
        <th scope="col">Personagem</th>
        </tr>
        </thead>
        <tbody>
        @if ($elencos)
            @foreach($elencos as $elenco)
            <tr>
            <th scope="row">{{ $elenco->Filme_ID }}</th>
            <td>{{ $elenco->Filme_ID }}</td>
            <td>{{ $elenco->Papel }}</td>
            <td>{{ $elenco->Personagem }}</td>
            <td><a href="{{ route('elenco.edit', ['elenco'=> $elenco->ID]) }}" class="btn btn-primary">Atualizar Genero</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection