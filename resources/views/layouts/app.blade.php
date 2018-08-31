<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/intro') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
      
                        <!-- Authentication Links -->
                        @guest
                            <li>
                                <a href="{{ action('Auth\LoginController@showLoginForm') }}">{{ __('Login') }}</a>
                            </li>

                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>

                        @else
                            <li>
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="glyphicon glyphicon-user"></span>{{ Auth::user()->name }}<span class="caret"></span> 
                                </a>
                                
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <li>
                                   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   </li>
         
                                </ul>

                            </li>
                        @endguest
                    </ul>

                </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
