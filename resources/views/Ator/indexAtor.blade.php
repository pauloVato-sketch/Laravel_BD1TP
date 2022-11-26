@extends('templates.templateAtor')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center"> Lista de Atores </h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Primeiro_Nome </th>
        <th scope="col">Nome_Meio</th>
        <th scope="col">Ultimo_Nome</th>
        </tr>
        </thead>
        <tbody>
        @if ($atores)
            @foreach($atores as $ator)
            <tr>
            <th scope="row">{{ $ator->ID }}</th>
            <td>{{ $ator->Primeiro_Nome }}</td>
            <td>{{ $ator->Nome_Meio }} </td>
            <td>{{ $ator->Ultimo_Nome }}</td>
            <td><a href="{{ route('ator.edit', ['ator'=> $ator->ID]) }}" class="btn btn-primary">Atualizar Ator</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection