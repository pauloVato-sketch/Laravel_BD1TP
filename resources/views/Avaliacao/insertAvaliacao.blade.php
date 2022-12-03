@extends('templates.templateAvaliacao')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">

    <form action="{{ isset($avaliacao) ? route('avaliacao.update') : route('avaliacao.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <div class="form-group">
            <label type="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Nota</label>
            <input type="text" name="score" value="{{ isset($avaliacao) ? $avaliacao->Nota : '' }}" class="form-control text-center" placeholder="Enter Score">
        </div>
        <br>
        @if(!(isset($avaliacao)))
            <input type="hidden" name="id" value="{{ '' }}" >
            <div class="form-group" style="padding-bottom:10px">
                <select name="movie_id" id="id">  
                    @foreach($filmes as $filme)
                        <option value="{{$filme->ID}}">{{$filme->Titulo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="padding-bottom:10px;">
                <select name="usuario_id" id="id">  
                    @foreach($usuarios as $usuario)
                        <option value="{{$usuario->ID}}">{{$usuario->Login}}</option>
                    @endforeach
                </select>
            </div>
        @else
            <input hidden type="text" name="movie_id" value="{{ $avaliacao->Filme_ID }}" class="form-control text-center" >
            <input hidden type="text" name="usuario_id" value="{{ $avaliacao->Usuario_ID }}" class="form-control text-center" >

        @endif
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($avaliacao) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection