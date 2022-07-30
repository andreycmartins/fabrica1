<!doctype html>
<html lang="en">
<style>
    body {
        font-family: 'Nunito', sans-serif;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>@yield('titulo')</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link btn btn-primary m-1" type="button" href="{{URL::to('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-success m-1" type="button" href="{{URL::to('cadastro-marca')}}">Cadastro de Marca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger m-1" type="button" href="{{URL::to('fabricacao-automovel')}}">Fabricação de Automóvel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-warning m-1" type="button" href="{{URL::to('automoveis-fabricados')}}">Automóveis Fabricados</a>
            </li>
        </ul>
    </div>
</nav>

@yield('conteudo')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/index.js" type="text/javascript"></script>
</body>
</html>