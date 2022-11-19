@extends('templates.template')

@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    
    <form action="{{ $filme ? route('filme.update') : route('filme.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <input type="hidden" name="id" value="{{ $filme ? $filme->ID : '' }}" >
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Titulo</label>
            <input type="text" name="title" value="{{ $filme ? $filme->Titulo : '' }}" class="form-control text-center" placeholder="Enter Title">

        </div>
        <div class="form-group">
            <label for="Evandrino Barros" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Diretor</label>
            <input type="text" name="director" value="{{ $filme ? $filme->Diretor : '' }}" class="form-control text-center" placeholder="Enter Director">

        </div>
        <div class="form-group" style="padding-bottom:10px">
            <label for="0000" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Ano de Produção</label>
            <input type="text" name="year_prod" value="{{ $filme ? $filme->Ano_Producao : '' }}" class="form-control text-center" placeholder="Enter Year of Production">
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{$filme ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection