<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios e Consultas</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap-5.2.2/css/bootstrap.min.css')}}">
    @yield('header')
</head>
<body class="img js-fullheight" style="background-image: url('/images/bg3.jpg');">
    <nav class="navbar navbar-expand-lg navbar-light ml-auto" style="background-color: #64b5f6;">
        <a class="navbar-brand" href="/home/" style="margin-left:30px;">Filmes S.A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('relatorio.index') }}">Lista de Relatórios <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('relatorio.create') }}">Inserir Relatório</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('relatorio.delete') }}">Remover Relatório</a>
                </li>       
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>