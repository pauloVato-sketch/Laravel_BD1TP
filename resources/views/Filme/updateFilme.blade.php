@extends('templates.templateFilme')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    <form action="{{ route('filme.store') }}" class="justify-content-center">
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Titulo</label>
            <input type="text" name="title" class="form-control text-center" placeholder="Enter Title">

        </div>
        <div class="form-group">
            <label for="Evandrino Barros" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Diretor</label>
            <input type="text" name="director" class="form-control text-center" placeholder="Enter Director">

        </div>
        <div class="form-group" style="padding-bottom:10px">
            <label for="0000" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Ano de Produção</label>
            <input type="text" name="year_prod" class="form-control text-center" placeholder="Enter Year of Production">
        </div>
        <div class="form-group" style="padding-bottom:10px">
        <select name="studio_id" id="id">  
                @foreach($estudios as $estudio)
                    <option value="{{$estudio->ID}}">{{$estudio->Nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" style="padding-bottom:10px">
        <select name="gender_id" id="id">  
                @foreach($generos as $genero)
                    <option value="{{$genero->ID}}">{{$genero->Descricao}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">Inserir</button>
    </form>
</div>

@endsection