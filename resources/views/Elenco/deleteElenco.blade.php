@extends('templates.templateElenco')

@section('header')  
@endsection

@section('content')
        @if ($elencos)
        <form action="{{ route('elenco.deleteReq') }}" method="POST">
            @csrf    
            <select name="id" id="id">  
            @foreach($elencos as $elenco)
                    
                    @foreach($filmes as $filme)
                        @if($filme->ID == $elenco->Filme_ID)
                            @php 
                                $filmeT = $filme
                            @endphp
                        @endif
                    @endforeach
                    @foreach($atores as $ator)
                        @if($ator->ID == $elenco->Ator_ID)
                            @php 
                                $atorT = $ator
                            @endphp
                        @endif
                    @endforeach
                        <option value="{{ $elenco->Filme_ID.' '.$elenco->Ator_ID }}">{{$elenco->Papel." - ".$elenco->Personagem." - ".$filmeT->Titulo." - ".$atorT->Primeiro_Nome." ".$atorT->Nome_Meio." ".$atorT->Ultimo_Nome}}</option>
            @endforeach

            </select>
            <button type="submit" class="btn btn-primary mx-auto d-block">Deletar</button>
        </form>    
        @endif

@endsection