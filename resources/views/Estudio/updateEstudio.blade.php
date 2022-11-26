@extends('templates.templateEstudio')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    <form action="{{ route('ator.store') }}" class="justify-content-center">
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Nome</label>
            <input type="text" name="name" class="form-control text-center" placeholder="Nome">

        </div>
       
        <button type="submit" class="btn btn-primary mx-auto d-block">Inserir</button>
    </form>
</div>

@endsection