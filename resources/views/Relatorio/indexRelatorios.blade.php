@extends('templates.templateRelatorio')

@section('header')  
    <link rel="stylesheet" title="AtorTable" type="text/css" href="{{url('assets/bootstrap-5.2.2/css/filmesTable.css')}}">
@endsection

@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="display-3 text-white">Relatórios e Consultas</h1>
				</div>
			</div>
			<div class="col justify-content-center">
	            <div class="row form-group">
	            	<a href="{{ route('relatorio.show',['op'=> 1]) }}" class="form-control btn btn-primary submit px-3 btn-work">Exibir Elencos Completos</a>
	            </div><br>
                <div class="row form-group">
                    <a href="{{ route('relatorio.show',['op'=> 2]) }}" class="form-control btn btn-primary submit px-3 btn-work">Exibir Avaliações Completas</a>
                    </div><br>
                <div class="row form-group">
                    <a href="{{ route('relatorio.show',['op'=> 3]) }}" class="form-control btn btn-primary submit px-3 btn-work">Exibir Média de notas dos filmes</a>
                    </div><br>
                <div class="row form-group">
                    <a href="{{ route('relatorio.show',['op'=> 4]) }}" class="form-control btn btn-primary submit px-3 btn-work">Exibir Filmes e média de custo de produção de filmes lançados a partir de 2010</a>
                    </div><br>
                <div class="row form-group">
                    <a href="{{ route('relatorio.show',['op'=> 5]) }}" class="form-control btn btn-primary submit px-3 btn-work">Exibir informações completas dos filmes com 5 maiores custos de produção</a>
                    </div><br>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

@endsection