<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Locadora') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="{{route('home')}}"><strong>Locadora</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="{{route('home')}}"><strong> Home </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('filme')}}"><strong> Filmes </strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="{{route('genero')}}"><strong> Gêneros </strong></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-link text-dark" href="{{route('login')}}"><strong> Login </strong></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-link text-dark" href="{{route('register')}}"><strong> Registre-se</strong></a>
      </li>
      <li class="nav-item">
        <a class="btn btn-link text-dark" href="{{route('meus-filmes')}}"><strong> Meus filmes</strong></a>
      </li>
      <li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
        <button type="submit" class="btn btn-danger" >Sair</button>
            @csrf
          </form>
      </li>
    </ul>
  </div>
</nav>

               

                    <!-- Right Side Of Navbar -->
                    <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                      <button type="submit" >Sair</button>
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
         </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>

    <div class="container ">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted ">© 2023 Company, Inc</span>
    </div>
  </footer>
</div>
</body>
</html>
