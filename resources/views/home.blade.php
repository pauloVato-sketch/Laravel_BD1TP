<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testeFilme</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap-5.2.2/css/bootstrap.min.css')}}">
    @yield('header')
</head>
<body>
<br>
<br>
<div class="table-responsive">
    <table class="table table-hover mx-auto w-auto">
    <thead>
        <h1 style="text-align:center">Filmes S.A</h1>
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
            <td><a href="{{ route('genero.index') }}" class="btn btn-danger">Consultar Genero</a></td>
        </tr>
        <tr class="col align-self-center">
            <td><a href="{{ route('user.index') }}" class="btn btn-danger">Consultar Usuario</a></td>    
        </tr>
        <tr class="col align-self-center">
            <td><a href="{{ route('user.index') }}" class="btn btn-danger">Consultar Relatorios</a></td>    
        </tr>
    </tbody>
    </table>
</div>

</body>