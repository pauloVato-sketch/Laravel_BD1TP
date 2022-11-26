@extends('templates.templateEstudio')

@section('header')  
@endsection

@section('content')
        @if ($atores)
        <form action="{{ route('ator.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
                @foreach($atores as $ator)
                    <option value="{{$ator->ID}}">{{$ator->Primeiro_Nome.' '.$ator->Nome_Meio.' '.$ator->Ultimo_Nome}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection