<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EmiaFeels - Cinema</title>

        <!-- Styles -->
        <link rel="stylesheet" href={{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}>
         <link rel="stylesheet" href={{ asset('css/select2.css')}}>
              <link rel="stylesheet" href={{ asset('css/parsley.css')}}>
              <link rel="stylesheet" href={{ asset('css/materialize.css')}}>
              <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>
    </head>
    <body>
    <header>
        <nav>
            <div class="row">
                <div class="nav-wrapper">
                    <div class="col s4">
                        <a href="{{ url('/listareps') }}" class="brand-logo">EmiaFeels - Cinema</a>
                    </div>
                    <div class="col s4">
                        <div class="nav-content justify">
                            <ul class="tabs tabs-transparent">
                                <li class="tab"><a href="{{ url('/generos/') }}">Gêneros</a></li>
                                <li class="tab"><a href="{{ url('/filmes/') }}">Filmes</a></li>
                                <li class="tab"><a href="{{ url('/listareps/') }}">Listas de Reprodução</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul id="nav-mobile" class="ag hide-on-med-and-down">
                        @if (Auth::guest())
                        <div class="col s4">
                            <li><a class="waves-effect waves-light btn" href="{{ route('login') }}">Login</a></li>
                            <li><a class="waves-effect waves-teal btn-flat" href="{{ route('register') }}">Registrar</a></li>
                        </div>
                        @else
                        <div class="col s4">
                            <div> 
                            <a class="btn waves-effect waves-dark right" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <a class="btn waves-effect waves-light right">{{ Auth::user()->name }}</a>
                            </div>
                    </ul>
                </div>  
                @endif
            </div>
        </div>
    </nav>
    </header>
    <main>
    @yield('conteudo')
</main>
        <footer class="page-footer">
          <div class="container">
            <div class="row center">
              <div class="col l6 s12">
                <h5 class="white-text">Emia Feels - Cinema</h5>
                <p class="grey-text text-lighten-4">Website programado por <i>Bruno Guimarães</i> e desenhado por <i>Luana Caetano Rondon</i> e <i>Milena Cavallaro</i>. Trabalho produzido para o 2ºSemestre das aulas de PWII, com professores <i>João Rubens</i> e <i>Marcos Roberto Moraes<i>. ||3ºEmia||</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            ©2017 EmiaFeels - Cinema || 3ºEmia
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            
    <!-- Scripts -->
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/select2.js')}}"></script>
    <script src="{{ asset('js/parsley.js')}}"></script>
    <script src="{{ asset('js/materialize.js')}"></script>
    <script type="text/javascript">
  $('select').select2();
</script>
</body>
</html>
