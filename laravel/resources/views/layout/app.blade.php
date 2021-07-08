<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', "Comics")</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>

        <header>
            <div class="topheader">

            </div>
            <div class="centerheader">
                <div class="logo">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </div>
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
                    <a href="">SHOP</a><i class="fas fa-sort-down navicon"></i>
                </nav>
                <div>
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <div class="jumbotron">

            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="topfooter">

            </div>

            <div class="bottfooter">

            </div>

        </footer>
        
    </body>
</html>