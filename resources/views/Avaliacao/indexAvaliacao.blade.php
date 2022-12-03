@extends('templates.templateAvaliacao')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center text-white"> Lista de Avaliações </h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID Filme</th>
        <th scope="col">ID Usuario</th>
        <th scope="col">Nota</th>
        <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @if ($avaliacoes)
            @foreach($avaliacoes as $avaliacao)
            <tr>
            <th scope="row">{{ $avaliacao->Filme_ID }}</th>
            <td>{{ $avaliacao->Usuario_ID }}</td>
            <td>{{ $avaliacao->Nota }}</td>
            <td><a href="{{ route('avaliacao.edit', ['Filme_ID'=> $avaliacao->Filme_ID,'Usuario_ID'=> $avaliacao->Usuario_ID]) }}" class="btn btn-primary">Atualizar avaliacao</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection