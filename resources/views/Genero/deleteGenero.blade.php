@extends('templates.templateGenero')

@section('header')  
@endsection

@section('content')
        @if ($generos)
        <form action="{{ route('genero.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
                @foreach($generos as $genero)
                    <option value="{{$genero->ID}}">{{$genero->Descricao}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection