@extends('templates.templateAvaliacao')

@section('header')  
@endsection

@section('content')
        @if ($avaliacoes)
        <form action="{{ route('avaliacao.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
            @foreach($avaliacoes as $avaliacao)
                    
                    @foreach($filmes as $filme)
                        @if($filme->ID == $avaliacao->Filme_ID)
                            @php 
                                $filmeT = $filme
                            @endphp
                        @endif
                    @endforeach
                    @foreach($usuarios as $usuario)
                        @if($usuario->ID == $avaliacao->Usuario_ID)
                            @php 
                                $usuarioT = $usuario
                            @endphp
                        @endif
                    @endforeach
                        <option value="{{ $avaliacao->Filme_ID.' '.$avaliacao->Usuario_ID }}">{{$filmeT->Titulo." - ".$usuario->Login." - ".$avaliacao->Nota}}</option>
            @endforeach

            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection