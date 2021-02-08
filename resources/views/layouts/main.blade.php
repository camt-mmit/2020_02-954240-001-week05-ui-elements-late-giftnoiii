<!doctype html >
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel= "stylesheet" type = "text/css"
              href="{{ asset('css/style.css') }}" />
    </head>
    <body>

    <header>
        @yield('title')
    </header>

    <main>
        @yield('content')
    </main>
    <footer>
        <p>&#xA9; Copyright Week-05, 2020 Tanaporn's UI elements</p>
    </footer>
    </body>
</html>
