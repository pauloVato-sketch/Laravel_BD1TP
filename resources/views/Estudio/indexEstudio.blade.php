@extends('templates.templateEstudio')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center"> Lista de Estudios </h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome </th>
        </tr>
        </thead>
        <tbody>
        @if ($estudios)
            @foreach($estudios as $estudio)
            <tr>
            <th scope="row">{{ $estudio->ID }}</th>
            <td>{{ $estudio->Nome }}</td>
            <td><a href="{{ route('estudio.edit', ['estudio'=> $estudio->ID]) }}" class="btn btn-primary">Atualizar Ator</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection