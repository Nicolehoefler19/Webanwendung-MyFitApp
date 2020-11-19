<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ 'img/Logo.png' }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <ul class="navbar-nav ml-auto">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('training') }}">
                            Trainingsübersicht
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profil') }}">
                                Mein Profil
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <img id="profilpicture-nav" src="{{ asset('imgs/myprofil.jpg') }}">
                    </li>
                @endguest
            </ul>        
        </nav> 
        
        <div class="container-fluid">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <footer>
            <ul class="nav nav-pills">
            <li class="nav-item">
                <p>Du hast eine Frage?</p>
                <a class="nav-link active" href="#">Jetzt kontaktieren!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Impressum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Datenschutz</a>
            </li>
        
            </ul>
        </footer>
</body>
<script type="text/javascript">
        //search function

$(document).ready(function(){
    $('#search').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '{{ URL::to('search/search') }}',
            data: '{'search':$value}',
            success:function(data){
                $('li').html(data);
            }
        });
    });
});

</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
</html>
