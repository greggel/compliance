<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
    </head>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <body>
      <script src="https://unpkg.com/vue/dist/vue.js"></script>

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
            <div id="title">Compliance</div>

        <div class="container">
            <div class="sidebar">
                 <ul class="sidebar-nav">
                    <li><a href="profile">Profile</a></li>
                    <li><a href="environment">Environment</a></li>
                    <li><a href="library">Library</a></li>
                    <li><a href="help">Help</a></li>
                </ul>
              </div>

            <!-- CSRF Stuff -->
        
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        
        <div class="container" id='app'>
            <envirolist></envirolist>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
