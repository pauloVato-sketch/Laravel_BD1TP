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
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light ml-auto" style="background-color: #64b5f6;">
    <a class="navbar-brand" href="/" style="margin-left:30px;">Filmes S.A</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('filme.index') }}">Lista de filmes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('filme.create') }}">Inserir Dado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('filme.delete') }}">Remover Dado</a>
                </li>       
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>