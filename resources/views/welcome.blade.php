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
            <div id="title">Compliance</div>
            <div class="sidebar">
                 <ul class="sidebar-nav">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Environment</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
              </div>
              <div id="phpgrid">
                    <?php include_once("phpGrid/conf.php"); 

                    $dg = new C_DataGrid("SELECT * FROM demo");
                    $dg -> display();

                    ?>
                  <!--<iframe src="editablegrid-mysql-example/index.html" class="iframe"></iframe> !-->
              </div>
    </body>
</html>
