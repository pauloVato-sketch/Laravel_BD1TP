@extends('templates.templateElenco')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">

    <form action="{{ isset($elenco) ? route('elenco.update') : route('elenco.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <div class="form-group">
            <label tyle="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Papel</label>
            <input type="text" name="role" value="{{ isset($elenco) ? $elenco->Papel : '' }}" class="form-control text-center" placeholder="Enter Role">
        </div>
        <div class="form-group">
            <label style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Personagem</label>
            <input type="text" name="character" value="{{ isset($elenco) ? $elenco->Personagem : '' }}" class="form-control text-center" placeholder="Enter Character">
        </div>
        <br>
        @if(!(isset($elenco)))
            <input type="hidden" name="id" value="{{ '' }}" >
            <div class="form-group" style="padding-bottom:10px">
                <select name="movie_id" id="id">  
                    @foreach($filmes as $filme)
                        <option value="{{$filme->ID}}">{{$filme->Titulo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="padding-bottom:10px;">
                <select name="actor_id" id="id">  
                    @foreach($atores as $ator)
                        <option value="{{$ator->ID}}">{{$ator->Primeiro_Nome." ".$ator->Nome_Meio." ".$ator->Ultimo_Nome}}</option>
                    @endforeach
                </select>
            </div>
        @else
            <input hidden type="text" name="movie_id" value="{{ $elenco->Filme_ID }}" class="form-control text-center" >
            <input hidden type="text" name="actor_id" value="{{ $elenco->Ator_ID }}" class="form-control text-center" >

        @endif
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($elenco) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection