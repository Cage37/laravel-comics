<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', "Comics")</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>

        <header id="site_header">
            <div class="topheader">

            </div>
            <div class="centerheader">
                <nav>
                    <a href="{{ route('home') }}">CHARACTERS</a>
                    <a href="{{ route('comics') }}">COMICS</a>
                    <a href="">MOVIES</a>
                    <a href="">TV</a>
                    <a href="">GAMES</a>
                    <a href="">COLLECTIBLES</a>
                    <a href="">VIDEOS</a>
                    <a href="">FANS</a>
                    <a href="">NEWS</a>
                    <a href="">SHOP</a>
                </nav>
            </div>
            <div class="jumbotron">

            </div>
        </header>

        <main id="site_main">
            @yield('content')
        </main>

        <footer id="site_footer">
            <div class="topfooter">

            </div>

            <div class="bottfooter">

            </div>

        </footer>
        
    </body>
</html>