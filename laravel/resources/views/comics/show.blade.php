@extends('layout.app')

@section('title', "Comics")

@section('content')

<section class="maincontsingle">

    <div class="divblue space">
        <img src="{{ $comic['thumb'] }}" alt="">
    </div>

    <div class="divmainsingle space">
        <div class="leftmain">
            <h1>"{{ $comic['title'] }}"</h1>
            <div class="contgreen">
                <p><span>U.S. Price:</span> {{ $comic['price'] }}</p>
                <p class="itemgreen">AVAILABLE</p>
                <p>Check Availability</p>
            </div>
            <p class="desc">{{ $comic['description'] }}</p>
        </div>
        <div class="rightmain">
            <h3>ADVERTISMENT</h3>
            <img src="{{ asset('img/adv.jpg') }}" alt="">
        </div>
    </div>

    <div class="divinfo space">
        <div class="divinfotop">
            <div class="infoleft">
                <h4>Talent</h4>
                <div class="contart">
                    <p>Art by:</p>
                    <span>@foreach($comic['artists'] as $artist)
                    {{ $artist }}
                    @if(!$loop->last)
                    ,                 
                     @endif
                    @endforeach</span>
                </div>
                <div class="contwritt">
                    <p>Written by:</p>
                    <span>@foreach($comic['writers'] as $writer)
                        {{ $writer }}
                        @if(!$loop->last)
                        ,                 
                         @endif
                        @endforeach</span>
                </div>
            </div>
            
            <div class="inforight">
                <h4>Specs</h4>
                <div class="divspecsone">
                    <p>Series:</p>
                    <span class="spanseries">{{ $comic['series'] }}</span>
                </div>
                <div class="divspecstwo">
                    <p>U.S. Price:</p>
                    <span>{{ $comic['price'] }}</span>
                </div>
                <div class="divspecsthree">
                    <p>On Sale Date:</p>
                    <span>{{ $comic['sale_date'] }}</span>
                </div>
            </div>
        </div>

        <div class="divinfobott"></div>
    </div>

</section>


@endsection