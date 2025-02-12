<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Goolge -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">

        <!-- CSS BootStrap -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>
    <body>
        <header>
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
              </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                  <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                @auth
                <li class="nav-item">
                  <a href="/dashboard" class="nav-link">Meus eventos</a>
                </li>
                <li class="nav-item">
                  <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">Sair</a>
                  </form>
                @endauth
                @guest
                <li class="nav-item">
                  <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
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
              <p class='msg'>{{ session('msg') }}</p>
              @endif
              @yield('content')
            </div>
          </div>
        </main>
        <footer>
            <p>LHCR Events &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
