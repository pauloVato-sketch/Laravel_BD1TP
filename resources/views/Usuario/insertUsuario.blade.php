@extends('templates.templateUsuario')
@section('header')  
@endsection

@section('content')
<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    
    <form action="{{ isset($usuario) ? route('usuario.update') : route('usuario.store') }}" class="justify-content-center" method="POST">
    @csrf    
        <input type="hidden" name="id" value="{{ isset($usuario) ? $usuario->ID : '' }}" >
        <div class="form-group">    
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Nome</label>
            <input type="text" name="name" value="{{ isset($usuario) ? $usuario->Nome : '' }}" class="form-control text-center" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Login</label>
            <input type="text" name="username" value="{{ isset($usuario) ? $usuario->Login : '' }}" class="form-control text-center" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="Exemplo" style="color:#ffffff;font-family:Lucida Handwriting;font-size:35px;">Senha</label>
            <input type="text" name="password" value="{{ isset($usuario) ? $usuario->Senha : '' }}" class="form-control text-center" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary mx-auto d-block">
        {{isset($usuario) ? 'Atualizar' : 'Inserir' }}
        </button>
    </form>
</div>

@endsection