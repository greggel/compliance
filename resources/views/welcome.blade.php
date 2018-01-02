<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
    </head>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div id="title"><br /> Compliance </div>
                <div class="sidebar-wrapper">
                 <ul class="sidebar-nav">
                    <a href="https://laravel.com/docs">Documentation</a><br />
                    <a href="https://laracasts.com">Laracasts</a><br />
                    <a href="https://laravel-news.com">News</a><br />
                    <a href="https://forge.laravel.com">Forge</a><br />
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </ul>
              </div>
              <div class="wrapper">
                  <div id="page-content-wrapper"></div>
              </div>
    </body>
</html>
