<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Filmes S.A PSVV</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap-5.2.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/bootstrap-5.2.2/css/style.css')}}">
</head>
<body class="img js-fullheight" style="background-image: url('/images/bg3.jpg');">
<div class="table-responsive">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="display-3 text-white">Home</h1>
				</div>
			</div>
            <div class="col justify-content-center">
	            <div class="row form-group">
                    <a href="{{ route('filme.index') }}" class="btn btn-success">Consultar Filmes</a>
	            </div><br>
                <div class="row form-group">
                    <a href="{{ route('ator.index') }}" class="btn btn-success">Consultar Ator</a>
                </div><br>
                <div class="row form-group">
                    <a href="{{ route('avaliacao.index') }}" class="btn btn-success">Consultar Avaliacao</a>
                </div><br>
                <div class="row form-group">
                    <a href="{{ route('elenco.index') }}" class="btn btn-success">Consultar Elenco</a>
                </div><br>
                <div class="row form-group">
                    <a href="{{ route('estudio.index') }}" class="btn btn-success">Consultar Estudio</a>
                </div><br>
                <div class="row form-group">
                    <a href="{{ route('genero.index') }}" class="btn btn-success">Consultar Genero</a>
                </div><br>
                @if(Session::has('userType'))
                    @switch(Session::get('userType'))
                        @case('ADMIN')
                            <div class="row form-group">
                                <a href="{{ route('usuario.index') }}" class="btn btn-success">Consultar Usuario</a>
                            </div><br>
                            <div class="row form-group">
                                <a href="{{ route('relatorio.index') }}" class="btn btn-success">Consultar Relatorios</a>
                            </div><br>
                        @break
                    @endswitch
                @endif
			</div>
		</div>
	</section>

</div>

</body>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</html>