@extends('templates.templateUsuario')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
    <h2 class="text-center text-white">Lista de Usuarios</h2>
        <table class="table table-dark table-bordered" style="margin:20px">
        <thead align="left" style="display: table-header-group">
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Login</th>
        <th scope="col">Senha</th>
        <th scope="col">Tipo de Usuario</th>
        <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @if ($usuarios)
            @foreach($usuarios as $usuario)
            <tr>
            <th scope="row">{{ $usuario->Nome }}</th>
            <td>{{ $usuario->Login }}</td>
            <td>{{ $usuario->Senha }}</td>
            <td>{{ $usuario->Tipo }}</td>
            <td><a href="{{ route('usuario.edit', ['usuario'=> $usuario->ID]) }}" class="btn btn-primary">Atualizar Usuario</a></td>
        </tr>
            @endforeach
        @endif
        </tbody>
        </table>
@endsection