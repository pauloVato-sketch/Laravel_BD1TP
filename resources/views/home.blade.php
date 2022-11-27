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
<br>
<br>
<div class="table-responsive">
    <table class="table table-hover mx-auto w-auto">
    <thead>
        <h1 style="text-align:center" class="text-white">Filmes S.A</h1>
        <th scope="col"> </th>
    </thead>
    <tbody >
    <tr class="row align-self-center" style="margin-left:10px">
            <td><a href="{{ route('filme.index') }}" class="btn btn-success">Consultar Filmes</a></td>
        </tr>
        <tr class="row align-self-center" style="margin-left:20px">
            <td><a href="{{ route('ator.index') }}" class="btn btn-success">Consultar Ator</a></td>
        </tr>
        <tr class="justify-content-center">
            <td><a href="{{ route('avaliacao.index') }}" class="btn btn-danger">Consultar Avaliacao</a></td>
        </tr>
        <tr class="col align-self-center">
            <td><a href="{{ route('elenco.index') }}" class="btn btn-danger">Consultar Elenco</a></td>
        </tr>
        <tr class="col align-self-center">
            <td><a href="{{ route('estudio.index') }}" class="btn btn-success">Consultar Estudio</a></td>
        </tr>
        <tr class="col align-self-center">
            <td><a href="{{ route('genero.index') }}" class="btn btn-success">Consultar Genero</a></td>
        </tr>
        @if(Session::has('userType'))
        @switch(Session::get('userType'))
            @case('ADMIN')
                <tr class="col align-self-center">
                    <td><a href="{{ route('usuario.index') }}" class="btn btn-danger">Consultar Usuario</a></td>    
                </tr>
                <tr class="col align-self-center">
                    <td><a href="{{ route('usuario.index') }}" class="btn btn-danger">Consultar Relatorios</a></td>    
                </tr>
            @break
        @endswitch
        @endif
    </tbody>
    </table>
</div>

</body>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</html>