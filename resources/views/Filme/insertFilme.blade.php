@extends('templates.templateFilme')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    
    <form action="{{ isset($filme) ? route('filme.update') : route('filme.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <input type="hidden" name="id" value="{{ isset($filme) ? $filme->ID : '' }}" >
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Titulo</label>
            <input type="text" name="title" value="{{ isset($filme) ? $filme->Titulo : '' }}" class="form-control text-center" placeholder="Enter Title">

        </div>
        <div class="form-group">
            <label for="Evandrino Barros" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Diretor</label>
            <input type="text" name="director" value="{{ isset($filme) ? $filme->Diretor : '' }}" class="form-control text-center" placeholder="Enter Director">

        </div>
        <div class="form-group" style="padding-bottom:10px">
            <label for="0000" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Ano de Produção</label>
            <input type="text" name="year_prod" value="{{ isset($filme) ? $filme->Ano_Producao : '' }}" class="form-control text-center" placeholder="Enter Year of Production">
        </div>
        @if(isset($filme))
            <input type="hidden" name="id" value="{{ $filme->ID  }}" >
        @else
        <div class="form-group" style="padding-bottom:10px">
                <label for="0000" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">ID do Estudio</label>
                <input type="text" name="studio_id" value="{{  '' }}" class="form-control text-center" placeholder="Enter Studio ID">
        </div>
        @endif
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($filme) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection