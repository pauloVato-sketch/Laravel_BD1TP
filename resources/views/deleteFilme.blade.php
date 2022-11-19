@extends('templates.template')

@section('header')  
@endsection

@section('content')
        @if ($filmes)
        <form action="{{ route('filme.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
                @foreach($filmes as $filme)
                    <option value="{{$filme->ID}}">{{$filme->Titulo}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection