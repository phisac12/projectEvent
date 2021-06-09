<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <!--Fonte do Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!--CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                </a>
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="navbar-item">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="navbar-item">
                        <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                    @endauth
                   @guest
                   <li class="navbar-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest

                </ul>
            </div>
        </nav>
    </header>
<main> 
<div class="container-fluid">
    <div class="row">
        @if(session('msg'))
        <p class="msg" id="mensage"> {{ session('msg') }} </p>
        @endif
    @yield('content')
    </div>
</div>
</main>

<footer>
    <p>HDC Events &copy; 2021</p>
</footer>
</body>
<script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
</html>


<script>

$().ready(function() {
    setTimeout(function () {
        document.getElementById('mensage').remove(); // "foo" é o id do elemento que seja manipular.
    }, 2500); // O valor é representado em milisegundos.
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
