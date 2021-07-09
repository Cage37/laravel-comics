@extends('layout.app')

@section('title', "Comics")

@section('content')


<div class="maincontainer">
    <section class="container">
        <div class="divcurrseries">
            <p>CURRENT SERIES</p>
        </div>
        <div class="comics">
            @foreach($comics as $index => $comic) 
            <div class="card">
                <a href="{{ route('comic', ['id' => $index])}}">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h3>{{ $comic['series'] }}</h3></a>
            </div>
            @endforeach
        </div>
        <div class="contbutton">
            <button>LOAD MORE</button>
        </div>
    </section>
</div>

<section class="contmerch">
    <div class="dcinfo">
        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        <p>DIGITAL COMICS</p>
    </div>
    <div class="dcinfo">
        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
        <p>DC MERCHANDISE</p>
    </div>
    <div class="dcinfo">
        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
        <p>SUBSCRIPTION</p>
    </div>
    <div class="dcinfo">
        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
        <p>COMIC SHOP LOCATION</p>
    </div>
    <div class="dcinfo">
        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
        <p>DC POWER VISA</p>
    </div>

</section>

@endsection