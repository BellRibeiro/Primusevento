
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title')</title>

        <!-- fontes das aplicações -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- CSS das aplicações -->
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body >

    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand"> P R I M U S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/events/create" class="nav-link">Criar Eventos</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Entrar</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">Cadastrar</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
<main>
<div class="container-fluid">
    <div class="row">
        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
    </div>
</div>
</main>
 <footer >
    <div >
        <p >PRIMUS Eventos &copy; 2024</p>
    </div>
</footer>
<script tipo="módulo" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomódulo src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
