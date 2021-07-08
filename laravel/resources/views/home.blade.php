@extends('layout.app')

@section('title', "Homepage")

@section('content')

<section class="container">
    <div class="divcurrseries">
        <p>CURRENT SERIES</p>
    </div>
    <div class="fumetti">
        @foreach($fumetti as $fumetto) 
        <div class="card">
            <img src="{{ $fumetto['thumb'] }}" alt="">
            <h3>{{ $fumetto['series'] }}</h3>
        </div>
        @endforeach
    </div>
    <div class="contbutton">
        <button>LOAD MORE</button>
    </div>
</section>

<section class="contmerch">

</section>

@endsection