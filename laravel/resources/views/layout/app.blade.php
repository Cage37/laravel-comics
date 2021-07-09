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
                <p>DC POWER VISA <i class="far fa-registered"></i></p>
                <p>ADDITIONAL DC SITES <i class="fas fa-sort-down"></i></p>
            </div>
            <div class="centerheader">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/dc-logo.png') }}" alt=""></a>
                </div>
                <nav>
                    <a href="{{ route('characters') }}">CHARACTERS</a>
                    <a href="{{ route('comics') }}" class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">COMICS</a>
                    <a href="{{ route('movies') }}">MOVIES</a>
                    <a href="{{ route('tv') }}">TV</a>
                    <a href="{{ route('games') }}">GAMES</a>
                    <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                    <a href="{{ route('videos') }}">VIDEOS</a>
                    <a href="{{ route('fans') }}">FANS</a>
                    <a href="{{ route('news') }}">NEWS</a>
                    <a href="{{ route('shop') }}">SHOP</a><i class="fas fa-sort-down navicon"></i>
                </nav>
                <div>
                    <input type="text" placeholder="Search &#x1F50E;&#xFE0E;" >
                </div>
            </div>
            <div class="jumbotron"></div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="topfooter"></div>

            <div class="bottfooter"></div>
        </footer>
        
    </body>
</html>