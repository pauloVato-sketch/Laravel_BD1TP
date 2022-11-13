@extends('templates.template')

@section('content')
    <h1 class="text-center">Index</h1>
    @if ($filmes)
        @foreach($filmes as $filme)
            {{ $filme->Titulo }}
        @endforeach
@endif
@endsection