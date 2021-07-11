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
            <div class="topfooter">
                <div class="topfootleft">
                    <div class="dcshop">
                        <h3>DC COMICS</h3>
                        <a href="">Characters</a>
                        <a href="">Comics</a>
                        <a href="">Movies</a>
                        <a href="">TV</a>
                        <a href="">Games</a>
                        <a href="">Videos</a>
                        <a href="">News</a>
                        <h3 class="titleshop">SHOP</h3>
                        <a href="">Shop DC</a>
                        <a href="">Shop DC Collectibles</a>
                    </div>
                    <div class="dcfoot">
                        <h3>DC</h3>
                        <a href="">Terms Of Use</a>
                        <a href="">Privacy Policy (New)</a>
                        <a href="">Ad Choices</a>
                        <a href="">Advertising</a>
                        <a href="">Jobs</a>
                        <a href="">Subscriptions</a>
                        <a href="">Talent Workshop</a>
                        <a href="">CPSC Certificates</a>
                        <a href="">Ratings</a>
                        <a href="">Shop Help</a>
                        <a href="">Contact Us</a>
                    </div>
                    <div class="dcsites">
                        <h3>SITES</h3>
                        <a href="">DC</a>
                        <a href="">MAD Magazine</a>
                        <a href="">DC Kids</a>
                        <a href="">DC Universe</a>
                        <a href="">DC Power Visa</a>
                    </div>
                    <div>
                        <p class="footinfo">All site content TM and <i class="far fa-copyright"></i> 2020 DC Entertaiment, unless otherwise <span>noted here</span>. All rights reserved. <br><span>Cookies Settings</span></p>
                    </div>
                </div>
                <div class="topfootright"></div>
            </div>

            <div class="bottfooter">
                <div class="bottfootleft">
                    <button>SIGN-UP NOW!</button>
                </div>
                <div class="bottfootright">
                    <p>FOLLOW US</p>
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                </div>
            </div>
        </footer>
        
    </body>
</html>