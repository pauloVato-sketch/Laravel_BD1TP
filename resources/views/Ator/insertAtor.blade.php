@extends('templates.templateAtor')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    
    <form action="{{ isset($ator) ? route('ator.update') : route('ator.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <input type="hidden" name="id" value="{{ isset($ator) ? $ator->ID : '' }}" >
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Primeiro Nome</label>
            <input type="text" name="first_name" value="{{ isset($ator) ? $ator->Primeiro_Nome : '' }}" class="form-control text-center" placeholder="Primeiro Nome">

        </div>
        <div class="form-group">
            <label for="Evandrino Barros" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Nome do Meio</label>
            <input type="text" name="middle_name" value="{{ isset($ator) ? $ator->Nome_Meio : '' }}" class="form-control text-center" placeholder="Nome do Meio">

        </div>
        <div class="form-group" style="padding-bottom:10px">
            <label for="0000" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Ultimo Nome</label>
            <input type="text" name="last_name" value="{{ isset($ator) ? $ator->Ultimo_Nome : '' }}" class="form-control text-center" placeholder="Ultimo Nome">
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($ator) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection