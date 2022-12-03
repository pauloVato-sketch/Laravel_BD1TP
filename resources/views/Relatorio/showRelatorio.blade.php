@extends('templates.templateRelatorio')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="display-3 text-white">Relatório {{$op}}</h1>
				</div>
			</div>
			<div class="col justify-content-center">
                    @if(isset($op))
                        @switch($op)
                            @case(1):
                                <table class="table table-dark table-bordered" style="margin:20px">
                                <thead align="left" style="display: table-header-group">
                                <tr>
                                <th scope="col">Titulo do Filme</th>
                                <th scope="col">Nome completo Ator</th>
                                <th scope="col">Papel do Ator no Filme</th>
                                <th scope="col">Personagem do Ator no Filme</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($var)
                                    @foreach($var as $v)
                                    <tr>
                                    <th scope="row">{{ $v->Titulo }}</th>
                                    <td>{{ $v->nome_completo }}</td>
                                    <td>{{ $v->Papel }}</td>
                                    <td>{{ $v->Personagem }}</td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                </table>
                            @break
                            @case(2):
                                <table class="table table-dark table-bordered" style="margin:20px">
                                <thead align="left" style="display: table-header-group">
                                <tr>
                                <th scope="col">Titulo do Filme</th>
                                <th scope="col">Ano de Produção</th>
                                <th scope="col">Estúdio do Filme</th>
                                <th scope="col">Diretor do Filme</th>
                                <th scope="col">Login do Usuário</th>
                                <th scope="col">Avaliação</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($var)
                                    @foreach($var as $v)
                                    <tr>
                                    <th scope="row">{{ $v->Titulo }}</th>
                                    <td>{{ $v->Ano_Producao }}</td>
                                    <td>{{ $v->Nome }}</td>
                                    <td>{{ $v->Diretor }}</td>
                                    <td>{{ $v->Login }}</td>
                                    <td>{{ $v->Nota }}</td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                </table>
                            @break
                            @case(3):
                                <table class="table table-dark table-bordered" style="margin:20px">
                                <thead align="left" style="display: table-header-group">
                                <tr>
                                <th scope="col">Titulo do Filme</th>
                                <th scope="col">Ano de Produção</th>
                                <th scope="col">Estúdio do Filme</th>
                                <th scope="col">Diretor do Filme</th>
                                <th scope="col">Média de Avaliações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if ($var)
                                    @foreach($var as $v)
                                    <tr>
                                    <th scope="row">{{ $v->Titulo }}</th>
                                    <td>{{ $v->Ano_Producao }}</td>
                                    <td>{{ $v->Nome }}</td>
                                    <td>{{ $v->Diretor }}</td>
                                    <td>{{ $v->Media }}</td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                </table>
                            @break
                            @case(4):
                                <table class="table table-dark table-bordered" style="margin:20px">
                                <thead align="left" style="display: table-header-group">
                                <tr>
                                <th scope="col">ID Estúdio</th>
                                <th scope="col">Estúdio do Filme</th>
                                <th scope="col">Média de Custo de Filmes do Estúdio</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if ($var)
                                    @foreach($var as $v)
                                    <tr>
                                    <th scope="row">{{ $v->ID }}</th>
                                    <td>{{ $v->Nome }}</td>
                                    <td>{{ $v->media_custo }}</td>
                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                </table>
                            @break
                            @case(5):
                                <table class="table table-dark table-bordered" style="margin:20px">
                                <thead align="left" style="display: table-header-group">
                                <tr>
                                <th scope="col">Estúdio do Filme</th>
                                <th scope="col">Genero do Filme</th>
                                <th scope="col">Titulo do Filme</th>
                                <th scope="col">Ano de Produção do Filme</th>
                                <th scope="col">Diretor do Filme</th>
                                <th scope="col">Custo de Produção do Filme</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if ($var)
                                    @foreach($var as $v)
                                    <tr>
                                    <th scope="row">{{ $v->Nome }}</th>
                                    <td>{{ $v->Descricao }}</td>
                                    <td>{{ $v->Titulo }}</td>
                                    <td>{{ $v->Ano_Producao }}</td>
                                    <td>{{ $v->Diretor }}</td>
                                    <td>{{ $v->Custo_Producao }}</td>

                                </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                </table>
                            @break
                        @endswitch
                        @endif
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

@endsection