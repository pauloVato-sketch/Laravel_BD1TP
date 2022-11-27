@extends('templates.templateUsuario')

@section('header')  
@endsection

@section('content')
        @if ($usuarios)
        <form action="{{ route('usuario.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
                @foreach($usuarios as $usuario)
                    <option value="{{$usuario->ID}}">{{$usuario->Login}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection