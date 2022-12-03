@extends('templates.templateElenco')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    <form action="{{ route('elenco.store') }}" class="justify-content-center">
    <div class="form-group">
            <label style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Papel</label>
            <input type="text" name="role" class="form-control text-center" placeholder="Enter Role">

        </div>
        <div class="form-group">
            <label style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Personagem</label>
            <input type="text" name="character"  class="form-control text-center" placeholder="Enter Character">
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">Inserir</button>
    </form>
</div>

@endsection