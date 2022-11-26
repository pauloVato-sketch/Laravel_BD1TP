@extends('templates.templateEstudio')

@section('header')  
@endsection

@section('content')
        @if ($estudios)
        <form action="{{ route('estudio.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
                @foreach($estudios as $estudio)
                    <option value="{{$estudio->ID}}">{{$estudio->Nome}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection