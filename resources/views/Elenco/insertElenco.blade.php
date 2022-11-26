@extends('templates.templateElenco')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    
    <form action="{{ isset($elenco) ? route('elenco.update') : route('elenco.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <input type="hidden" name="id" value="{{ isset($elenco) ? $elenco->ID : '' }}" >
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Descricao</label>
            <input type="text" name="description" value="{{ isset($elenco) ? $elenco->Descricao : '' }}" class="form-control text-center" placeholder="Descricao">

        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($elenco) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection